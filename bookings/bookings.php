<?php

define('DB_NAME', 'booking');
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

$value = $_POST['s_date'];
$value2 = $_POST['e_date'];
$value3 = $_POST['no'];
$sql = "INSERT INTO rooms (no_of_rooms, s_date, e_date) VALUES ('$value3', '$value', '$value2')";

if (!mysql_query($sql)) {
	die('Error: ' .mysql_error());
	}
echo 'Thank you for contacting us. We will mail you the further details within 24 hours.';
mysql_close();


?> 