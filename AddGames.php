<?php 
  require_once "includes/dbh.inc.php";
  require_once "Validate.php";

  if(isset($_POST)) {      
    $name = $description = $cost = $openingTime = $closingTime = $operationHours = $location = "";
    $name = validate($_POST["name"]);
    if(isset($_POST["description"])) {
      $escape = trim($_POST["description"]);
      $description = mysqli_real_escape_string($conn, $escape);
    }
    $cost = validate($_POST["cost"]);
    $openingTime = validate($_POST["openingTime"]);
    $closingTime = validate($_POST["closingTime"]);
    $combined = date("g:i a", strtotime($openingTime)) . " - " . date("g:i a", strtotime($closingTime));
    $operationHours = mysqli_real_escape_string($conn, $combined);
    $location = validate($_POST["location"]);

    $addRow = "INSERT INTO `Theme_Park_Database`.`carnival_games`(
      `carnival_name`,
      `carnival_location`,
      `carnival_description`,
      `hours_of_operation`,
      `cost_per_round`,
      `currently_in_operation`
    ) VALUES (
      '$name',
      '$location',
      '$description',
      '$operationHours',
      $cost,
      TRUE);";

    try {
      if (mysqli_query($conn, $addRow)) {
        header("Location: success.php");
      }
    } catch (mysqli_sql_exception $e) {
      header("Location: index.php");
    }
  }
?>