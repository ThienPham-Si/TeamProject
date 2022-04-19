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
                <th class='tableHeader'>Name</th>");
            if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin')
                echo "<th class='tableHeader'>Action</th>";
           echo(" </tr>
        ");
    
    $display = "SELECT * FROM Theme_Park_Database.locations where Theme_Park_Database.locations.is_deleted=false";

    $result = mysqli_query($conn, $display);
    
    if ($result) {
        while($row=mysqli_fetch_array($result)) {
            echo "<tr class='tableRow'>";
            echo('<td class="tableData">' . $row['location_id'] . '</td>');
            echo('<td class="tableData">' . $row['location'] . '</td>');
            if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') {
                echo ('<td class="tableData">
          <form action="delete.php" method="POST" >
            <input type="hidden" 
              value="' . $row["location_id"]. '" 
              name="id" />
            <input type="hidden" 
              value="location_id" 
              name="idAttributeName" />
            <input type="hidden" 
              value="locations" 
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