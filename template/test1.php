<?php
$server="localhost";
$user="root";
$password="";
$db="bookstore";
mysql_connect($server,$user,$password) or die("sorry,cannot connect to the ymsql.");
mysql_select_db($db) or die("Sorry,can't select the database.");
?>