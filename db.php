<?php
$db = new PDO("str");

function db() {
	global $db;
	return $db;
}