<?php
$databaseHost = "localhost";
$databaseName = "bookstore";
$databaseUser = "root";
$databasePassword ="";
$connected = mysql_connect($databaseHost,$databaseUser,$databasePassword);



if(! $connected){
	die("Could not connect :".mysql_error()."<br/>");
}else{
	//echo "connected";
}
mysql_select_db($databaseName);
?>