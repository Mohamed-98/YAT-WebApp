<?php
// PDO => PHP Data Object 
$dsn = 'mysql:host=localhost;dbname=webapp';
$db_user = 'root';
$db_pass = '';
$options = array(
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);

$connect = new PDO($dsn,$db_user,$db_pass,$options);

