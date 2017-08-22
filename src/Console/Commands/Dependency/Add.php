<?php

namespace Radiergummi\Foundation\Framework\Console\Commands\Dependency;

use Cilex\Provider\Console\Command;
use Composer\Semver\Comparator as VersionComparator;
use Radiergummi\Foundation\Framework\Dependencies\Dependency;
use Radiergummi\Foundation\Framework\Dependencies\Manager as DependencyManager;
use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;
use const FILTER_VALIDATE_URL;
use function array_shift;
use function filter_var;
use function preg_match;
use function sprintf;

/**
 * Add dependency command
 *
 * @package Radiergummi\Foundation\Framework\Console\Commands\Dependency
 */
class Add extends Command {

    /**
     * @inheritdoc
     */
    protected function configure() {
        $this
            ->setName( 'dependency:add' )
            ->setDescription( 'Adds a dependency' )
            ->addArgument( 'name', InputArgument::REQUIRED, 'dependency name' )
            ->addOption( 'remote', 'r', InputOption::VALUE_OPTIONAL, 'dependency remote URL' );
    }

    /**
     * executes the command
     *
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return void
     * @throws \Radiergummi\Foundation\Framework\Dependencies\Exception\DependencyDownloadException
     * @throws \Radiergummi\Foundation\Framework\Exception\FoundationException
     * @throws \Symfony\Component\Console\Exception\InvalidArgumentException
     * @throws \Symfony\Component\Console\Exception\LogicException
     * @throws \Symfony\Component\Console\Exception\RuntimeException
     */
    protected function execute( InputInterface $input, OutputInterface $output ) {
        $dependencyRemote = $input->getOption( 'remote' );

        $dependencyManager = new DependencyManager();
        $dependencyManager->setOutputStream( $output );

        /** @var \Symfony\Component\Console\Helper\QuestionHelper $helper */
        $helper = $this->getHelper( 'question' );

        $matches = [];

        // check if the name has been entered as <name>@<version>
        if ( preg_match( '/(.+)@([0-9\.-_]+)/', $input->getArgument( 'name' ), $matches ) ) {

            // remove the full match
            array_shift( $matches );

            list( $dependencyName, $dependencyVersion ) = $matches;
        } else {
            throw new InvalidArgumentException( 'Dependencies must be specified as "{name}@{version}"' );
        }

        if ( ! $dependencyRemote ) {
            $remoteQuestion = new Question( 'Please enter the remote URL for the dependency: ' );
            $remoteQuestion->setValidator( function( $remote ) {
                if ( ! filter_var( $remote, FILTER_VALIDATE_URL ) ) {
                    throw new InvalidArgumentException( 'The remote URL must be valid' );
                }

                return $remote;
            } );

            $dependencyRemote = $helper->ask( $input, $output, $remoteQuestion );
        }

        $dependency = new Dependency(
            $dependencyName,
            $dependencyVersion,
            $dependencyRemote
        );

        // check if we have that dependency already
        if ( $dependencyManager->has( $dependency ) ) {
            $currentVersion = $dependencyManager->getVersion( $dependency );

            if ( VersionComparator::equalTo( $dependency->getVersion(), $currentVersion ) ) {
                $output->writeln( sprintf(
                                      '%s is already available in version %s',
                                      $dependency->getName(),
                                      $currentVersion
                                  ) );

                $renew = $helper->ask( $input, $output, new ConfirmationQuestion( 'should the dependency be renewed? [y|N] ', false ) );

                if ( $renew ) {
                    $dependencyManager->update( $dependency );
                }

                return;
            }

            // dependency exists already, check version
            if ( VersionComparator::greaterThan( $dependency->getVersion(), $currentVersion ) ) {
                $output->writeln( sprintf(
                                      'local %s version is lower than %s [%s]',
                                      $dependency->getName(),
                                      $dependency->getVersion(),
                                      $currentVersion
                                  ) );

                $output->writeln( sprintf(
                                      'updating %s [%s → %s]',
                                      $dependency->getName(),
                                      $currentVersion,
                                      $dependency->getVersion()
                                  ) );

                // new version is greater than existing, update
                $dependencyManager->update( $dependency );

                return;
            }

            // new version is lower or equal, ignore or verify
            $output->writeln( sprintf(
                                  'local %s version is greater than %s [%s]',
                                  $dependency->getName(),
                                  $dependency->getVersion(),
                                  $currentVersion
                              ) );

            $downgrade = $helper->ask( $input, $output, new ConfirmationQuestion( 'should the package be downgraded? [y|N] ', false ) );

            if ( $downgrade ) {
                $dependencyManager->add( $dependency );
            }

            return;
        }

        $output->writeln( sprintf( 'adding dependency %s', $dependency->getName() ) );

        // new dependency, just install
        $dependencyManager->add( $dependency );
    }
}
