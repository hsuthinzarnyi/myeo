<?php
require_once "test1.php";
$result=mysql_query("SELECT * FROM book");
var_dump(mysql_fetch_assoc($result));
?>