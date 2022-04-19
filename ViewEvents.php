<?php 
    include_once 'header.php'; 
    include_once 'includes/dbh.inc.php';
?>
<div id="content" class="content">
<?php
    echo("
        <table class='table'>
            <tr class='top'>
                <th class='tableHeader'>ID</th>
                <th class='tableHeader'>Name</th>
                <th class='tableHeader'>Description</th>
                <th class='tableHeader'>Cancellation Status</th>
                <th class='tableHeader'>Event Coordinator</th>
                <th class='tableHeader'>Event Capacity</th>
                <th class='tableHeader'>Event Date</th>
                <th class='tableHeader'>Start Time</th>
                <th class='tableHeader'>End Time</th>
                <th class='tableHeader'>Location In Theme Park</th>");
            if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') 
                echo "<th class='tableHeader'>Action</th>";
                echo("
            </tr>
        ");
    
    $display = "SELECT * FROM Theme_Park_Database.park_events where Theme_Park_Database.park_events.is_deleted=false";

    $result = mysqli_query($conn, $display);
    
    if ($result) {
        while($row=mysqli_fetch_array($result)) {
            $ec = (int)$row['event_coordinator'];
            $ecQuery = "SELECT first_name, m_name, last_name 
                        FROM `Theme_Park_Database`.`employees` 
                        WHERE `Theme_Park_Database`.`employees`.`employee_id`=$ec";
            $coordinator = mysqli_query($conn, $ecQuery);

            $loc = (int)$row['location'];
            $locQuery = "SELECT location_id, location
                        FROM `Theme_Park_Database`.`locations` 
                        WHERE location_id=$loc";
            $location = mysqli_query($conn, $locQuery);

            echo "<tr class='tableRow'>";
            echo('<td class="tableData">' . $row['event_id'] . '</td>');
            echo('<td class="tableData">' . $row['event_name'] . '</td>');
            echo('<td class="tableData">' . $row['event_description'] . '</td>');
            $cancelled = "Not canceled";
            if((bool)$row['is_cancelled'] == 1)
                $cancelled = "Canceled";
            echo('<td class="tableData">' . $cancelled . '</td>');
            if($coordinator) {
                $fetchedCoordinator=mysqli_fetch_array($coordinator);
                $ecName =  $fetchedCoordinator['first_name'] . ' ' . 
                           $fetchedCoordinator['m_name'] . ' ' . 
                           $fetchedCoordinator['last_name'];
                echo('<td class="tableData">' . $ecName . '</td>');
            } else 
            echo('<td class="tableData">' . 'Unable to find coordinator, or coordinator doesn\'t exist.' . '</td>');

            echo('<td class="tableData">' . $row['capacity'] . '</td>');
            echo('<td class="tableData">' . date("F d, Y", strtotime($row['event_date'])) . '</td>');
            echo('<td class="tableData">' . date("g:i a", strtotime($row['start_time']))  . '</td>');
            echo('<td class="tableData">' . date("g:i a", strtotime($row['end_time'])) . '</td>');
            if($location)
                echo('<td class="tableData">' . mysqli_fetch_array($location)['location'] . '</td>');

            if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') {
                echo ('<td class="tableData">
          <form action="delete.php" method="POST" >
            <input type="hidden" 
              value="' . $row["event_id"]. '" 
              name="id" />
            <input type="hidden" 
              value="event_id"
              name="idAttributeName" />
            <input type="hidden" 
              value="park_events" 
              name="tableName" />
            <input 
              type="submit" 
              name= "delete" 
              value="Delete">
          </form>
        </td>');
      }
            echo "</tr>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connn);
    }
    echo('</table>');
    $conn->close();
 ?> 
 </div>
<?php include_once "footer.php"; ?>