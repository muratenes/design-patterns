<?php

spl_autoload_register(function ($className) {
    $dirs = ['', 'Plans/'];

    foreach ($dirs as $dir) {
        $file = "{$dir}{$className}.php";
        if (is_readable($file)) require_once $file;
    }
});