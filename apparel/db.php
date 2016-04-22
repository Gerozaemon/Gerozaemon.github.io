<?php
/*データベースの接続設定*/
$server = "localhost";
$user = "root";
$password = "abcd1234";
$dbname = "mytest";

/*データベースに接続*/
$conn = mysql_connect($server, $user, $password);
mysql_select_db($dbname);
?>
