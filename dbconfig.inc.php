<?
$HOST='127.0.0.1';
$DB='teasite_db';
$USER='r';
$PASS='123456';
$USER='root';
$PASS='root';

$conn=mysql_connect($HOST,$USER,$PASS) or die("Error: Could not established Connection");
	if($conn){
		mysql_select_db($DB,$conn) or die("Error:Could not connect to Database!!!");
	}
?>