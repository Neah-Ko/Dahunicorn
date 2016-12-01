<?php

session_start();

// Composer autoloader
require_once 'vendor/autoload.php';

include_once "config.php";

if( file_exists( "db.php" ) ) {
  include_once "db.php";
} else {
  throw new Exception("You need to create a db.php file in root directory from the file db_example.php, with your credentials", 1);
  die();
}

include_once "Dahunicorn/routes.php";
