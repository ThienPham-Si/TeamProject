<?php 
  include_once 'header.php'; 
  include_once 'includes/dbh.inc.php';
?>

<div id="content" class="content">
<?php
  echo("
  <div class='table-wrap'>
  <table class='table table-striped table-hover table-responsive'>
  <thead>
      <tr class='top'>
        <th class='tableHeader'>ID</th>
        <th class='tableHeader'>Name</th>
        <th class='tableHeader'>Phone Number</th>
        <th class='tableHeader'>Role in Theme Park</th>");
    if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') 
      echo "<th class='tableHeader'>Date of Birth</th>
      <th class='tableHeader'>Address</th>
      <th class='tableHeader'>Salary</th>
      <th class='tableHeader'>Emergency Contact Info</th>";
      echo "<th class='tableHeader'>Action</th>";
  echo ( "</tr></thead><tbody>");
  
  $display = "SELECT * FROM Theme_Park_Database.employees where Theme_Park_Database.employees.is_deleted=false";
  try {
    $result = mysqli_query($conn, $display);
    
    if ($result) {
      while($row=mysqli_fetch_array($result)) {
        echo "<tr'>";
        echo('<td>' . $row['employee_id'] . '</td>');
        echo('<td>' . $row['first_name'] . " " 
                      . $row['m_name'] . " "
                      . $row['last_name'] . '</td>');
        echo('<td>' . $row['ec_phone_num'] . '</td>');
        echo('<td>' . $row['employee_role'] . '</td>');
        if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') {
          echo('<td>' . $row['dob'] . '</td>');
          echo('<td>' . $row['address'] . '</td>');
          echo('<td>$' . $row['salery_biweekly'] . '</td>');
          echo('<td>' 
            .'<p>Relation: '. $row['ec_relation'] . '</p>
            <p>Name: ' . $row['emergency_contact_person'] . '</p>
            <p>Number: ' . $row['ec_phone_num'] . '</p>
            </td>');
          echo ('<td>
            <form action="delete.php" method="POST" >
              <input type="hidden" 
                value="' . $row["employee_id"]. '" 
                name="id" />
              <input type="hidden" 
                value="employee_id" 
                name="idAttributeName" />
              <input type="hidden" 
                value="employees" 
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
    echo "Unable to display employees - something went wrong!";
  }
  echo('</tbody></table>');
  $conn->close();
 ?> 
</div>
 </div>
<?php include_once "footer.php"; ?>