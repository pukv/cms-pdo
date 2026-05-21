<?php

spl_autoload_register(function ($className) {
    $dir = __DIR__ . "/classes/";

    $file = $dir . $className . ".php";

    if ($file) {
        require_once $file;
    } else {
        die("Class file for {$className} not found in {$file}");
    }
});
