<?php

namespace Radiergummi\Foundation\Framework\Console\Commands\Dependency;

use Cilex\Provider\Console\Command;
use Radiergummi\Foundation\Framework\Dependencies\Dependency;
use Radiergummi\Foundation\Framework\Dependencies\Manager as DependencyManager;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Install dependency command
 *
 * @package Radiergummi\Foundation\Framework\Console\Commands\Dependency
 */
class Install extends Command {
    protected function configure() {
        $this
            ->setName( 'dependency:install' )
            ->setDescription( 'Installs one dependency or all from index' )
            ->addArgument( 'name', InputArgument::OPTIONAL, 'dependency name' )
            ->addOption( 'remote', 'r', InputOption::VALUE_OPTIONAL, 'dependency remote URL' );
    }

    /**
     * executes the command
     *
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return void
     * @throws \Exception
     * @throws \Symfony\Component\Console\Exception\CommandNotFoundException
     * @throws \Symfony\Component\Console\Exception\InvalidArgumentException
     */
    protected function execute( InputInterface $input, OutputInterface $output ) {
        if ( $input->getArgument( 'name' ) ) {
            $this->getApplication()->find( 'dependency:add' )->run(
                new ArrayInput( [
                                    'command'  => 'dependency:add',
                                    'name'     => $input->getArgument( 'name' ),
                                    '--remote' => $input->getOption( 'remote' )
                                ] ),
                $output
            );

            return;
        }

        $manager = new DependencyManager();
        $manager->setOutputStream( $output );

        foreach ( $manager->getIndex()->getAll() as $name => $meta ) {
            $manager->update( new Dependency( $name, $meta['version'], $meta['remote'] ) );
        }

        $output->writeln( sprintf(
                              'successfully installed %d dependencies',
                              $manager->getIndex()->getLength()
                          ) );

        return;
    }
}
