<?php
// Composer autoloader
require_once 'vendor/autoload.php';

include_once "config.php";
session_start();

include_once "db.php";
include_once "controller/route.php";
