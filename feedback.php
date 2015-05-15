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
$value2 = $_POST['contact'];
$value3 = $_POST['rooms'];
$value4 = $_POST['food'];
$value5 = $_POST['others'];
$sql = "INSERT INTO feedback (name, contact, rooms, food, others) VALUES ('$value','$value2', '$value3','$value4', '$value5')";

if (!mysql_query($sql)) {
	die('Error: ' .mysql_error());
	}
echo 'Thank you for your Valuable feedback :)';
mysql_close();


?>