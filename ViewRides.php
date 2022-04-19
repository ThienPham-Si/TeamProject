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
                <th class='tableHeader'>Times Broken Down</th>
                <th class='tableHeader'>Number of Riders (Lifetime)</th>
                <th class='tableHeader'>Rider Minimum Height</th>
                <th class='tableHeader'>Operation Status</th>
                <th class='tableHeader'>Date First Opened</th>
                <th class='tableHeader'>Rider Capacity</th>
                <th class='tableHeader'>Speed (Mph) </th>
                <th class='tableHeader'>Duration (Minutes)</th>
                <th class='tableHeader'>Distance Traveled (Miles)</th>
                <th class='tableHeader'>Operation Hours</th>
                <th class='tableHeader'>Location In Theme Park</th>");
                if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') 
                    echo "<th class='tableHeader'>Action</th>";
                echo("
            </tr>
        ");
    
    $showRides = "SELECT * FROM Theme_Park_Database.rides where Theme_Park_Database.rides.is_deleted=false";

    $result = mysqli_query($conn, $showRides);
    
    if ($result) {
        while($row=mysqli_fetch_array($result)) {
            echo "<tr class='tableRow'>";
            echo('<td class="tableData">' . $row['ride_id'] . '</td>');
            echo('<td class="tableData">' . $row['ride_name'] . '</td>');
            echo('<td class="tableData">' . $row['ride_description'] . '</td>');
            echo('<td class="tableData">' . $row['times_broken_down'] . '</td>');
            echo('<td class="tableData">' . $row['number_of_riders'] . '</td>');
            echo('<td class="tableData">' . $row['min_height_inches'] . '</td>');
            $operating = "Operating";
            if((bool)$row['currently_in_operation'] != 1)
                $operating = "Not operating";
            echo('<td class="tableData">' . $operating . '</td>');
            echo('<td class="tableData">' . $row['date_first_opened'] . '</td>');
            echo('<td class="tableData">' . $row['ride_capacity'] . '</td>');
            echo('<td class="tableData">' . $row['ride_speed'] . '</td>');
            echo('<td class="tableData">' . $row['ride_duration'] . '</td>');
            echo('<td class="tableData">' . $row['distance_travelled'] . '</td>');
            echo('<td class="tableData">' . $row['operation_hours'] . '</td>');
            echo('<td class="tableData">' . $row['location'] . '</td>');
            if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') {
                echo ('<td class="tableData">
                    <form action="delete.php" method="POST" >
                        <input type="hidden" 
                        value="' . $row["ride_id"]. '" 
                        name="id" />
                        <input type="hidden" 
                        value="ride_id" 
                        name="idAttributeName" />
                        <input type="hidden" 
                        value="rides" 
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