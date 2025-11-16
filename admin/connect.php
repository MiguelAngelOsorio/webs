<?php
$dsn = 'mysql:host=sql308.infinityfree.com;dbname=if0_40433841_barbería';
$user = 'if0_40433841';
$pass = '9pt1gVX9PoPIvlu';
$option = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);
try {
	$con = new PDO($dsn, $user, $pass, $option);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo 'Good Very Good !';
} catch (PDOException $ex) {
	echo "Failed to connect with database ! " . $ex->getMessage();
	die();
}
