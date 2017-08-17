<?php

namespace Radiergummi\Foundation\Framework\Console\Commands\Dependency;

use Cilex\Provider\Console\Command;
use Radiergummi\Foundation\Framework\Dependencies\Dependency;
use Radiergummi\Foundation\Framework\Dependencies\Manager as DependencyManager;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

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
     * @throws \Symfony\Component\Console\Exception\LogicException
     * @throws \Symfony\Component\Console\Exception\InvalidArgumentException
     */
    protected function execute( InputInterface $input, OutputInterface $output ) {

        $dependencyManager = new DependencyManager();

        $testDependency = new Dependency(
            $input->getArgument( 'name' ),
            $input->getOption( 'version' ) ?? '',
            $input->getOption( 'remote' ) ?? ''
        );

        $dependencyManager->add( $testDependency );

        $output->writeln( 'TODO: This will build the application' );
    }
}
