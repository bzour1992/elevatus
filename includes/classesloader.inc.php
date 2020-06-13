<?php

// class autoloader function which includes a class once it's needed,(Helps save time when creating multple classes)

spl_autoload_register('autoLoader');

function autoLoader($className){
    $path = "core/";
    $ext = ".php";
    $fullPath = $path . $className . $ext;

    if (!file_exists($fullPath)) {
        return false;
    }

    include_once $fullPath;
}
