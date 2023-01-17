<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "sorting";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$con) {
    die("Database not found!");
}
