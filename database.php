<?php

$host = "localhost";
$dbname = "nike";
$username = "root";
$password = ""; 

$mysqli = new mysqli( $host, $username, $password, $dbname);

if ($mysqli ->connect_errno) {
    die("Connection error:" . $mysqli ->connect_error);
}// to check if it's correctly connected//

return $mysqli;