<?php

namespace Radiergummi\Foundation\Framework\Console\Commands;

use Cilex\Provider\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Add dependency command
 *
 * @package Radiergummi\Foundation\Framework\Console\Commands
 */
class Add extends Command {
    protected function configure() {
        $this->setName( 'dependency:add' )->setDescription( 'Get Application Information' );
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return void
     */
    protected function execute( InputInterface $input, OutputInterface $output ) {
        parent::execute( $input, $output );

        $output->writeln( 'TODO: This will build the application' );
    }
}
