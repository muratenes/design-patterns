<?php

spl_autoload_register(function ($className) {
    $dirs = ['', 'Builders/', 'Models/', 'Models/Parts/'];

    foreach ($dirs as $dir) {
        $file = "{$dir}{$className}.php";
        if (is_readable($file)) require_once $file;
    }
});