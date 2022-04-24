<?php

// $dbServername="localhost";
// $dbUsername="root";
// $dbPassword="";
// $dbDatabase="theme-park";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbDatabase);
$mysqli = new mysqli($dbServername, $dbUsername, $dbPassword, $dbDatabase) or die(mysqli_error($mysqli));
