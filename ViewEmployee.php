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
        <th class='tableHeader'>Phone Number</th>
        <th class='tableHeader'>Role in Theme Park</th>");
    if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') 
      echo "<th class='tableHeader'>Date of Birth</th>
      <th class='tableHeader'>Address</th>
      <th class='tableHeader'>Salary</th>
      <th class='tableHeader'>Emergency Contact Info</th>
      <th class='tableHeader'>Action</th>";
  echo ( "</tr>");
  
  $display = "SELECT * FROM Theme_Park_Database.employees where Theme_Park_Database.employees.is_deleted=false";

  $result = mysqli_query($conn, $display);
  
  if ($result) {
    while($row=mysqli_fetch_array($result)) {
      echo "<tr class='tableRow'>";
      echo('<td class="tableData">' . $row['employee_id'] . '</td>');
      echo('<td class="tableData">' 
        . $row['first_name'] . " " 
        . $row['m_name'] . " "
        . $row['last_name'] . '</td>');
      echo('<td class="tableData">' . $row['ec_phone_num'] . '</td>');
      echo('<td class="tableData">' . $row['employee_role'] . '</td>');
      if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin') {
        echo('<td class="tableData">' . $row['dob'] . '</td>');
        echo('<td class="tableData">' . $row['address'] . '</td>');
        echo('<td class="tableData">$' . $row['salery_biweekly'] . '</td>');
        echo('<td class="tableData">' 
          .'<p>Relation: '. $row['ec_relation'] . '</p>
          <p>Name: ' . $row['emergency_contact_person'] . '</p>
          <p>Number: ' . $row['ec_phone_num'] . '</p>
          </td>');
        echo ('<td class="tableData">
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