<?php

require_once 'vendor/autoload.php';
require_once 'routes/web.php';


$kernel = new \Src\Kernel();
//var_dump(\Src\Route::getList());
$kernel->boot();






