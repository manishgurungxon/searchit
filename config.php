<?php
ob_start();

try {

	$con = new PDO("mysql:dbname=gengine;host=localhost", "root", ""); #change the username and add password when have liveserver
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch(PDOExeption $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>