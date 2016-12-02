<?php

define( "ROOT_DIR", __DIR__ );
define( "PUBLIC_DIR", ROOT_DIR . "/public" );

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);

// Exceptions
$whoops = new \Whoops\Run();
$whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());
$whoops->register();
