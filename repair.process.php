<?php
  include_once 'includes/dbh.inc.php';

  if (isset($_POST['submit'])){
    $_SESSION['message'] = 'Record has been submitted';
    $_SESSION['msg_type'] = 'success';

    $ride_id = $_POST['ride_id'];
    $start = $_POST['maintance-start'];
    $description = $_POST['ticket-description'];
    $attraction_type = $_POST['attraction-type'];
    $cost = $_POST['repair-cost'];
    $close = $_POST['maintaince-close'];
    if(isset($_POST['repair-finished'])){
    $finished = $_POST['repair-finished'];
    }
    else{
      $finished = '0';
    }

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

  //   "INSERT INTO `Theme_Park_Database`.`maintaince_tickets`
  // (`ride_id`,
  // `date_opened`,
  // `date_closed`,
  // `ticket_discription`,
  // `cost_of_repair`,
  // `attraction_type`,
  // `ticket_status`,
  // `employee_to_notify`,
  // `is_deleted`)
  // VALUES
  // (<{id: }>,
  // <{ride_id: }>,
  // <{date_opened: }>,
  // <{date_closed: }>,
  // <{ticket_discription: }>,
  // <{cost_of_repair: }>,
  // <{attraction_type: }>,
  // <{ticket_status: }>,
  // <{employee_to_notify: }>,
  // <{is_deleted: 0}>);


  try {
      if (mysqli_query($conn, $sql)) {
          echo "<p class='items'>New record created successfully! View or add more tickets through the menu!</p>";
      }
  } catch (mysqli_sql_exception $e) {
      echo '<p class="items">Unable to add this ticket.</p>';
  }

    header("Location: repair.php");
  }

  if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("UPDATE `Theme_Park_Database`.`maintaince_tickets`
    SET
    `is_deleted` = 1
    WHERE id=$id;") or die($mysqli->error());

    $_SESSION['message'] = 'Record has been deleted';
    $_SESSION['msg_type'] = 'danger';

    header("location: repair.php");
  }

if (isset($_POST['update'])) {
  $_SESSION['message'] = 'Record has been updated';
  $_SESSION['msg_type'] = 'success';

  $id = $_POST['id'];
  $ride_id = $_POST['ride_id'];
  $start = $_POST['maintance-start'];
  $description = $_POST['ticket-description'];
  $attraction_type = $_POST['attraction-type'];
  $cost = $_POST['repair-cost'];
  $close = $_POST['maintaince-close'];
  if(isset($_POST['repair-finished'])){
  $finished = $_POST['repair-finished'];
  }
  else{
    $finished = '0';
  }


  $sql = "UPDATE `Theme_Park_Database`.`maintaince_tickets`
  SET
  `ride_id` = '$ride_id',
  `date_opened` = '$start',
  `date_closed` = '$close',
  `ticket_discription` = '$description',
  `cost_of_repair` = '$cost',
  `attraction_type` = '$attraction_type',
  `ticket_status` = '$finished'
  WHERE `id` = $id;";
  mysqli_query($conn, $sql);
	header('location: repair.php');
}
