<?php

// make database connection
session_start();

$dbname = 'week4';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';

$conn =  new mysqli($dbhost, $dbuser, $dbpass, $dbname);




?>