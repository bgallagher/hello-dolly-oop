<?php

class HelloDollyOOP_Plugin {

    public $pathToPluginFile;

    public function __construct($pathToPluginFile)
    {
        $this->$pathToPluginFile = $pathToPluginFile;
    }
}
