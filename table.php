<?php
  include_once 'includes/dbh.inc.php';
  include_once 'header.php';
?>
<div id="content" class="content">
  <table class="table table-striped table-hover table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $query = 'SELECT * FROM customers;';
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    echo"<tr>
      <th>".$row['id']."</th>
      <td>".$row['first_name']."</td>
      <td>".$row['last_name']."</td>
      <td>".$row['date_of_birth']."</td>
      <td>".$row['address']."</td>
      <td>".$row['phone_number']."</td>
      <td>".$row['email']."</td>
    </tr>";
    }}
    $conn->close();
  ?>
</tbody>
</table>

    <script src="script.js" type="text/javascript">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
