<?php
require_once __DIR__."/vendor/autoload.php";

spl_autoload_register(function($className){
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    require_once __DIR__."/models/$className.php";
})

?>