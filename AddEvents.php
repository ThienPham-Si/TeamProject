<?php
   require_once "includes/dbh.inc.php";
   require_once "header.php";
   echo('<div id="content" class="content">');

    $name = $description = $date = $coordinator = $capacity = $startTime = $endTime = $location = "";

    if(isset($_POST)) {
        require_once "Validate.php";

        $name = validate($_POST["name"]);
        if(isset($_POST["description"])) {
            $escape = trim($_POST["description"]);
            $description = mysqli_real_escape_string($conn, $escape);
        }
        $date = validate($_POST["date"]);
        $coordinator = validate($_POST["coordinator"]);
        $capacity = validate($_POST["capacity"]);
        $startTime = validate($_POST["startTime"]);
        $endTime = validate($_POST["endTime"]);
        $location = validate($_POST["location"]);
    }

    $addRow = "INSERT INTO `Theme_Park_Database`.`park_events`
        (`event_name`,
        `event_description`,
        `event_coordinator`,
        `event_date`,
        `capacity`,
        `start_time`,
        `end_time`,
        `location`)
    VALUES (
        '$name',
        '$description',
        $coordinator,
        '$date',
        $capacity,
        '$startTime',
        '$endTime',
        $location
    );";

    try {
        if (mysqli_query($conn, $addRow)) {
            echo "<p class='items'>New record created successfully! View or add more events through the menu!</p>";
        }
    } catch (mysqli_sql_exception $e) {
        echo '<p class="items">Unable to add this event.</p>';
    }
    $conn->close();
    echo("</div>");
    include_once "footer.php";
 ?>
