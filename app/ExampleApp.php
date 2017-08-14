<?php
namespace App;

use Radiergummi\Foundation\Framework\Application;

/**
 * ExampleApp class
 */
class ExampleApp extends Application {
    public function setup() {

        // application definitions here

        $this->dependencies->add('foo');
    }
}
