<?php
$db = new PDO("mysql:host=localhost;dbname=c9;", "tekreme73", "");

function db() {
	global $db;
	return $db;
}