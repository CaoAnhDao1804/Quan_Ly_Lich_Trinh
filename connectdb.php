<?php
$host= 'localhost';
$user='root';
$pass='';
$data='quanlylichtrinhtau';

$conn=mysql_connect($host,$user,$pass) or die ("Khong the ket noi co so du lieu");
$db=mysql_select_db($data,$conn) or die ("Khong tim thay database ");
mysql_query("SET NAMES 'UTF8'");

?>
