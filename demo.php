<?php

define('DB_NAME', 'login');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST','localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if(!link) {
	die('could not connect: ' .mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if(!db_selected) {
	die('cant use' .DB_NAME . ':' . mysql_error());
}

$value = $_POST['username'];
$value2 = $_POST['password'];
$sql1 = "INSERT INTO login (user, pass) VALUES ('$value', '$value2')";
if (!mysql_query($sql1)) {
	die('Error: ' .mysql_error());
	}
$value3 = $_POST['name'];
$value4 = $_POST['e-mail'];
$value5 = $_POST['contact'];
$sql = "INSERT INTO info (name,email, contact) VALUES ('$value3','$value4', '$value5')";

if (!mysql_query($sql)) {
	die('Error: ' .mysql_error());
	}
echo 'Thank you for signing up :)';
mysql_close();


?>