<?php

namespace Radiergummi\Foundation\Framework\Console\Commands;

use Cilex\Application;
use Cilex\Provider\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Build command
 *
 * @package Radiergummi\Foundation\Framework\Console\Commands
 */
class Build extends Command {

    protected function configure() {
        $this->setName( 'build' )->setDescription( 'Get Application Information' );
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return void
     */
    protected function execute( InputInterface $input, OutputInterface $output ) {
        $output->writeln( 'TODO: This will build the application' );
    }
}
