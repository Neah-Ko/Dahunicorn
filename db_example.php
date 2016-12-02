<?php
$db = new PDO(
    'mysql:host=localhost;dbname=c9',
    '<username>',
    '<password>'
);

function db() {
	global $db;
	return $db;
}