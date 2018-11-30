<?php
 include ("DB.php");
$q="CREATE TABLE IF NOT EXISTS project (
id int(100) NOT NULL AUTO_INCREMENT,
name varchar(200) NOT NULL,
image varchar(200) NOT NULL,
des text NOT NULL,
PRIMARY KEY (`id`)
 );";
$q="CREATE TABLE IF NOT EXISTS idusers (
id int(100) NOT NULL AUTO_INCREMENT,
username varchar(200) NOT NULL,
email varchar(200) NOT NULL,
password varchar NOT NULL,
PRIMARY KEY (`id`)
 );";



$db->myExec($q);
?>
