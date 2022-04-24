<?php 
  include_once 'header.php'; 
  include_once 'includes/dbh.inc.php';
?>
<div id="content" class="content">
<?php
  echo("<div class='table-wrap'>
  <table class='table table-striped table-hover table-responsive'>
    <thead>
      <tr class='top'>
      <th class='tableHeader'>ID</th>
      <th class='tableHeader'>Name</th>");
      if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin')
        echo "<th class='tableHeader'>Action</th>";
      echo(" </tr>
    <thead>
    <tbody>");

  $display = "SELECT * FROM Theme_Park_Database.locations where Theme_Park_Database.locations.is_deleted=false";
  try {
    $result = mysqli_query($conn, $display);
    
    if ($result) {
      while($row=mysqli_fetch_array($result)) {
        echo "<tr'>";
        echo('<td>' . $row['location_id'] . '</td>');
        echo('<td>' . $row['location'] . '</td>');
        if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') {
          echo ('<td>
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
                class="btn btn-primary btn-block mb-4"
                type="submit" 
                name= "delete" 
                value="Delete">
            </form>
        </td>');
      }
        echo "</tr>";
      }
    }
  } catch(mysqli_sql_exception $e) {
    echo "<tbody></table><p>Unable to display locations, please try again later.</p>";
    $conn->close();
    exit;
  }
  echo('</tbody></table>');
  $conn->close();
 ?> 
 </div>
</div>
<?php include_once "footer.php"; ?>