<?php 
  require_once "includes/dbh.inc.php";

  $name = $description = $numRiders = $minRiderHeight = $isOperating = $firstOpened = $capacity = $speed = $duration = $openingTime = $closingTime = $operationHours = $location = "";
  require_once "Validate.php";
  
  if(isset($_POST)) {
    $name = validate($_POST["name"]);
    if(isset($_POST["description"])) {
      $escape = trim($_POST["description"]);
      $description = mysqli_real_escape_string($conn, $escape);
    }
    $numRiders = validate($_POST["numRiders"]);
    if(isset($_POST["minRiderHeight"]))
      $minRiderHeight = validate($_POST["minRiderHeight"]);
    if(isset($_POST["isOperating"]))
      $isOperating = "TRUE";
    else 
      $isOperating = "FALSE";
    $firstOpened = validate($_POST["firstOpened"]);
    $capacity = validate($_POST["capacity"]);
    $speed = validate($_POST["speed"]);
    $duration = validate($_POST["duration"]);
    $openingTime = validate($_POST["openingTime"]);
    $closingTime = validate($_POST["closingTime"]);
    $combined = date("g:i a", strtotime($openingTime)) . " - " . date("g:i a", strtotime($closingTime));
    $operationHours = mysqli_real_escape_string($conn, $combined);
    $location = validate($_POST["location"]);
  }
  
  $addRow = "INSERT INTO `Theme_Park_Database`.`rides`
    (`ride_name`,
    `ride_description`,
    `times_broken_down`,
    `number_of_riders`,
    `min_height_inches`,
    `currently_in_operation`,
    `date_first_opened`,
    `ride_capacity`,
    `ride_speed`,
    `ride_duration`,
    `distance_travelled`,
    `operation_hours`,
    `location`)
  VALUES (
    '$name',
    '$description',
    0,
    $numRiders,
    $minRiderHeight,
    $isOperating,
    '$firstOpened',
    $capacity,
    $speed,
    $duration,
    ($speed/60.0*$duration), 
    '$operationHours',
    '$location'
  );";

  try {
    if (mysqli_query($conn, $addRow)) {
      header("Location: success.php");
    }
  } catch (mysqli_sql_exception $e) {
    header("Location: index.php");
  }
  $conn->close();
  exit;

?>