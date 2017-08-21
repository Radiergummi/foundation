<?php

use Radiergummi\Foundation\Framework\Exception\FoundationException;
use Radiergummi\Foundation\Framework\Utils\HashUtil;

describe( 'Exceptions', function() {
    it( 'should inherit from FoundationException', function() {
        $exception = null;

        try {
            throw ( new class( new Exception() ) extends FoundationException {
            } );
        }
        catch ( FoundationException $foundationException ) {
            $exception = $foundationException;
        }

        expect( $exception )
            ->to->be->an->instanceof( FoundationException::class );
    } );

    it( 'should have an error ID', function() {
        $errorId = null;

        try {
            throw new FoundationException( 'test' );
        }
        catch ( FoundationException $foundationException ) {
            $errorId = $foundationException->getErrorId();
        }

        expect( $errorId )
            ->to->equal( HashUtil::hash(
                'Radiergummi\\Foundation\\Framework\\Exception\\FoundationException' . __FILE__,
                HashUtil::METHOD_MD5
            ) );
    } );
} );
