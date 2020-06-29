<?php

class OrganizationHelper {
    public $config;

    function __construct()  {
        $this->config = require('_config.php');
    }

    public function getAsset($path) {
        $filePath = $this->config->cdn . $path . '?v=' . $this->config->version;
        echo $filePath;
    }
}

