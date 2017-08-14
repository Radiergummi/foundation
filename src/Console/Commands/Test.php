<?php

namespace Radiergummi\Foundation\Framework\Console\Commands;

use Cilex\Provider\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

/**
 * Test command
 * Runs Foundations unit tests
 *
 * @package Radiergummi\Foundation\Framework\Console\Commands
 */
class Test extends Command {
    protected function configure() {
        $this->setName( 'test' )->setDescription( 'Runs Foundations unit tests' );
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return void
     * @throws \Symfony\Component\Process\Exception\LogicException
     * @throws \Symfony\Component\Process\Exception\ProcessFailedException
     * @throws \Symfony\Component\Process\Exception\RuntimeException
     */
    protected function execute( InputInterface $input, OutputInterface $output ) {
        $peridot = new Process( 'peridot' );
        $peridot->run();

        if ( ! $peridot->isSuccessful() ) {
            throw new ProcessFailedException( $peridot );
        }

        echo $peridot->getOutput();
    }
}
