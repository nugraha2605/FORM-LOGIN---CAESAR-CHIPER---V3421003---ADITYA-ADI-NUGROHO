<?php
error_reporting(0);
session_start();
$db_host = '127.0.0.1';
$db_username = 'root';
$db_pw = '';
$db_name = 'data-security-system';

$conn=mysqli_connect($db_host,$db_username,$db_pw);
$select=mysqli_select_db($conn,$db_name);
//if ($conn){    echo('sukses');}
?>