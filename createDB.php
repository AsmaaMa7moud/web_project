<?php

 $pd=new PDO("mysql:host=localhost","root","");
   $q="create database registration;";

   $pd->exec($q);

?>
