<?php 
   require_once "includes/dbh.inc.php";
   require_once "header.php";
   echo('<div id="content" class="content">');

    $name = $description = $firstOpened = $coordinator = $capacity = $startTime = $endTime = $location = "";

    if(isset($_POST)) {
        require_once "Validate.php";

        $name = validate($_POST["name"]);
        if(isset($_POST["description"])) {
            $escape = trim($_POST["description"]);
            $description = mysqli_real_escape_string($conn, $escape);
        }
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
        `capacity`,
        `start_time`,
        `end_time`,
        `location`)
    VALUES (
        '$name',
        '$description',
        $coordinator,
        $capacity,
        '$startTime',
        '$endTime',
        $location
    );";

    if (mysqli_query($conn, $addRow)) {
        echo "<p class='items'>New record created successfully! View or add more events through the menu!</p>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $conn->close();
    echo("</div>");
    include_once "footer.php";
 ?>