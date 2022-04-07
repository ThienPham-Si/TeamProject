<?php
  include_once 'dbh.inc.php';

  $ride_id = $_POST['ride_id'];
  $start = $_POST['maintance-start'];
  $description = $_POST['ticket-description'];
  $attraction_type = $_POST['attraction-type'];
  $cost = $_POST['repair-cost'];
  $close = $_POST['maintaince-close'];
  $finished = $_POST['repair-finished'];

  $sql = "INSERT INTO `Theme_Park_Database`.`maintaince_tickets`
  (`ride_id`,
  `date_opened`,
  `date_closed`,
  `ticket_discription`,
  `cost_of_repair`,
  `attraction_type`,
  `ticket_status`)
  VALUES
  ('$ride_id',
  '$start',
  '$close',
  '$description',
  '$cost',
  '$attraction_type',
  '$finished');";

  mysqli_query($conn, $sql);
  header("Location: ../index.php");
  mysqli_close($conn);
