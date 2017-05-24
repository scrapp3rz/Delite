<?php
//database connect informations
$host = 'localhost';
$name =  'recipe';
$user = 'root';
$password = '';


//try to connect base

try{

// connect database
	$db = new PDO('mysql:host=' . $host . '; dbname=' . $name, $user, $password);

	//config PDO

	$db->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$db->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_WARNING);

	//encodage caractères
	$db->exec("SET CHARACTER SET utf8");
}
catch(Exception $e) {
	//return message of exception
	$message = $e->getMessage();
	$message = utf8_encode($message);

	echo $message;
	die();
}