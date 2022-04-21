<?php
//
$dbServername="team6database.cerk6mugrkdv.us-east-1.rds.amazonaws.com";
$dbUsername="team_6_member";
$dbPassword="Ramamurthy06";
$dbDatabase="Theme_Park_Database";

// $dbServername="localhost";
// $dbUsername="root";
// $dbPassword="";
// $dbDatabase="theme-park";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbDatabase);
$mysqli = new mysqli($dbServername, $dbUsername, $dbPassword, $dbDatabase) or die(mysqli_error($mysqli));
