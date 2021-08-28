<?php

/*
 * Using mysqli_connect for database connection  
 */

 $databaseHost = 'localhost';
 $databaseName = 'crud_db';
 $databaseUsername = 'root';
 $databasePassword = '';

 $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>