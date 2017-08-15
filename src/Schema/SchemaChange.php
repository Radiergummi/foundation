<?php

namespace Radiergummi\Foundation\Framework\Schema;

use JsonSerializable;
use function method_exists;
use Radiergummi\Foundation\Framework\Schema\Exception\SchemaNotSerializableException;

/**
 * SchemaChange class
 *
 * @package Radiergummi\Foundation\Framework\Schema
 */
abstract class SchemaChange implements JsonSerializable {
    public function jsonSerialize() {
        if ( ! method_exists( $this, 'toJson' ) ) {
            throw new SchemaNotSerializableException(
                sprintf( 'Schema Change %s does not expose a toJson() method', __CLASS__ )
            );
        }

        return $this->toJson();
    }

    abstract public function toJson();
}
