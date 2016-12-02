<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<title>InfoMigrant</title>
	<base href="/public"/>
	<link rel="stylesheet" href="styles/style.css" />

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<script title="webcomponentsjs" src="/public/bower/webcomponentsjs/webcomponents-lite.min.js"></script>

	<link rel="import" href="/public/bower/google-map/google-map.html">
	<link rel="import" href="/public/bower/google-map/google-map-marker.html">
	<link rel="import" href="/public/bower/google-map/google-map-poly.html">
	<link rel="import" href="/public/bower/google-map/google-map-directions.html">
</head>

<body>
	<main>
		<nav>
			<ul>
				<li>
					<a href="https://dahunicorn-2016-tekreme73.c9users.io/">HOME</a>
				</li>
				<li>
					<a href="https://dahunicorn-2016-tekreme73.c9users.io/phpmyadmin" target="_blank">PHPMYADMIN</a>
				</li>
			</ul>
		</nav>
		<div class="search">
			<h1>Je cherche</h1>
			<form class="searchLieu">
				Logement : <input type="checkbox" name="logement">
				Nourriture : <input type="checkbox" name="nourriture">
				Santé : <input type="checkbox" name="sante">
			</form>
		</div>
