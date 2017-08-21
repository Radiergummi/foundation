<?php

namespace Radiergummi\Foundation\Framework\Console\Commands\Dependency;

use Cilex\Provider\Console\Command;
use Composer\Semver\Comparator as VersionComparator;
use Radiergummi\Foundation\Framework\Dependencies\Dependency;
use Radiergummi\Foundation\Framework\Dependencies\Manager as DependencyManager;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;

/**
 * Add dependency command
 *
 * @package Radiergummi\Foundation\Framework\Console\Commands\Dependency
 */
class Add extends Command {
    protected function configure() {
        $this
            ->setName( 'dependency:add' )
            ->setDescription( 'Adds a dependency' )
            ->addArgument( 'name', InputArgument::REQUIRED, 'dependency name' )
            ->addOption( 'release', null, InputOption::VALUE_OPTIONAL, 'dependency release version' )
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

        $dependencyManager = new DependencyManager();
        $dependencyManager->setOutputStream( $output );

        $dependency = new Dependency(
            $input->getArgument( 'name' ),
            $input->getOption( 'release' ) ?? '',
            $input->getOption( 'remote' ) ?? ''
        );

        // check if we have that dependency already
        if ( $dependencyManager->getIndex()->has( $dependency->getName() ) ) {
            $currentVersion = $dependencyManager->getIndex()->get( sprintf( '%s.version', $dependency->getName() ) );

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

            /** @var \Symfony\Component\Console\Helper\QuestionHelper $helper */
            $helper = $this->getHelper( 'question' );

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
