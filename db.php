<?php
$db = new PDO(
    'mysql:host=localhost;dbname=c9',
    'homestead',
    'secret'
);

function db() {
	global $db;
	return $db;
}