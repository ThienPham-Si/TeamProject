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
            <th class='tableHeader'scope='col'>ID</th>
            <th class='tableHeader'>Name</th>
            <th class='tableHeader'>Description</th>
            <th class='tableHeader'>Cost Per Round</th>
            <th class='tableHeader'>Operation Status</th>
            <th class='tableHeader'>Operation Hours</th>
            <th class='tableHeader'>Location In Theme Park</th>");
            if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') 
                echo "<th class='tableHeader'>Action</th>";
          echo("</tr>
        <thead>
        <tbody>");
      
      $showRides = "SELECT * FROM Theme_Park_Database.carnival_games where Theme_Park_Database.carnival_games.is_deleted=false";
      
      try {
        $result = mysqli_query($conn, $showRides);
      
        if ($result) {
          while($row=mysqli_fetch_array($result)) {
            echo "<tr>";
            echo('<td>' . $row['id'] . '</td>');
            echo('<td >' . $row['carnival_name'] . '</td>');
            echo('<td >' . $row['carnival_description'] . '</td>');
            echo('<td >' . $row['cost_per_round'] . '</td>');
            $operating = "Operating";
            if((bool)$row['currently_in_operation'] != 1)
                $operating = "Not operating";
            echo('<td >' . $operating . '</td>');
            echo('<td >' . $row['hours_of_operation'] . '</td>');
            echo('<td >' . $row['carnival_location'] . '</td>');
            if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') {
              echo ('<td >
                <form action="delete.php" method="POST" >
                  <input type="hidden" 
                    value="' . $row["id"]. '" 
                    name="id" />
                  <input type="hidden" 
                  value="id" 
                  name="idAttributeName" />
                  <input type="hidden" 
                  value="carnival_games" 
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
      } catch (mysqli_sql_exception $e) {
        echo '</tbody></table> <p class="items"> unable to load carnival game data</p></div></div>';
        exit;
      }
    echo('</tbody></table></div>');
    $conn->close();
  ?> 
</div>
<?php include_once "footer.php"; ?>