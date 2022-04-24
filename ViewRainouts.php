<?php 
  include_once 'header.php'; 
  include_once 'includes/dbh.inc.php';
  
  echo '<div id="content" class="content">';
    echo "<div class='table-wrap'>
    <table class='table table-striped table-hover table-responsive'>
    <thead>
        <tr class='top'>
          <th class='tableHeader'>Rainout Date</th>
          <th class='tableHeader'>Closed Events</th>
          <th class='tableHeader'>Closed Rides</th>
          <th class='tableHeader'>Revenue Earned</th>";
          if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin')
            echo "<th class='tableHeader'>Action</th>";
        echo("</tr></thead><tbody>");
      
      $display = "SELECT * 
                  FROM Theme_Park_Database.rainouts 
                  where Theme_Park_Database.rainouts.is_deleted=false 
                  order by date_of_rainout";
      try {
        $result = mysqli_query($conn, $display);
        if ($result) {
          while($row=mysqli_fetch_array($result)) {
            echo "<tr'>";
            echo('<td>' . $row['date_of_rainout'] . '</td>');
            echo('<td>' . $row['number_of_cancelled_events'] . '</td>');
            echo('<td>' . $row['number_of_closed_rides'] . '</td>');

            $moneyFormat = $row['revenue_earned'];
            $commaLocation = strpos($row['revenue_earned'], ".") - 3;
            while($commaLocation > 0) {
              $moneyFormat = substr_replace($moneyFormat, ",", $commaLocation, 0);
              $commaLocation -= 3;
            }
            echo('<td> $' . $moneyFormat . '</td>');

            if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') {
              echo ('<td>
                <form action="delete.php" method="POST" >
                  <input type="hidden" 
                    value="' . $row["date_of_rainout"]. '" 
                    name="id" />
                  <input type="hidden" 
                    value="date_of_rainout" 
                    name="idAttributeName" />
                  <input type="hidden" 
                    value="rainouts" 
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
          echo '</tbody></table>
            </div>
          </div>';
        }
      } catch (mysqli_sql_exception $e) {
        echo '<tbody></table>
            </div>
          </div>';
        echo '<p class="items">Unable to display rainouts.</p>';
      }
  $conn->close();
  include_once "footer.php"; 
?>
