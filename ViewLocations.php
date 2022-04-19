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
            </tr>
        ");
    
    $display = "SELECT * FROM Theme_Park_Database.locations where Theme_Park_Database.locations.is_deleted=false";

    $result = mysqli_query($conn, $display);
    
    if ($result) {
        while($row=mysqli_fetch_array($result)) {
            echo "<tr class='tableRow'>";
            echo('<td class="tableData">' . $row['location_id'] . '</td>');
            echo('<td class="tableData">' . $row['location'] . '</td>');
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