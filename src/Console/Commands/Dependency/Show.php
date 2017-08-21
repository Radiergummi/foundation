<?php

namespace Radiergummi\Foundation\Framework\Console\Commands\Dependency;

use Cilex\Provider\Console\Command;
use Radiergummi\Foundation\Framework\Dependencies\Manager as DependencyManager;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use function array_push;

/**
 * Show dependency command
 *
 * @package Radiergummi\Foundation\Framework\Console\Commands\Dependency
 */
class Show extends Command {
    protected function configure() {
        $this
            ->setName( 'dependency:show' )
            ->setDescription( 'Lists all dependencies' )
            ->addOption( 'remote', 'r', InputOption::VALUE_NONE, 'shows the remote URL in the output' );
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
        $dependencyManager->setOutputStream( $output );

        if ( $dependencyManager->getIndex()->getLength() < 1 ) {
            $output->writeln( 'No dependencies installed yet' );

            return;
        }

        $tableHeaders = [
            '<options=bold>Name</>',
            'Version',
            'Type',
        ];

        if ( $input->getOption( 'remote' ) ) {
            array_push( $tableHeaders, 'Remote' );
        }

        $table = new Table( $output );
        $table->setHeaders( $tableHeaders );

        foreach ( $dependencyManager->getIndex()->getAll() as $dependency => $meta ) {
            $row = [
                sprintf( '<options=bold>%s</>', $dependency ),
                $meta['version'],
                $meta['type']
            ];

            if ( $input->getOption( 'remote' ) ) {
                array_push( $row, $meta['remote'] );
            }

            $table->addRow( $row );
        }

        $table->render();
    }
}
