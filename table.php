<?php
  include_once 'includes/dbh.inc.php';
  include_once 'header.php';
?>

<div id="content" class="content">
  <?php
  if(isset($_SESSION['message'])): ?>

  <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
     ?>
  </div>
<?php endif ?>

  <div class="table-wrap">
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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $query = 'SELECT * FROM customers;';
  $result = $conn->query($query);

  while($row = $result->fetch_assoc()): ?>
  <tr>
    <th><?php echo $row['id']; ?></th>
    <td><?php echo $row['first_name']; ?></td>
    <td><?php echo $row['last_name']; ?></td>
    <td><?php echo $row['date_of_birth']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['phone_number']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td>
      <a href="index.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary btn-block mb-4">Edit</a>
      <a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-primary btn-block mb-4">Delete</a>
    </td>

  </tr>
<?php endwhile; ?>
</tbody>
</table>
</div>

    <script src="script.js" type="text/javascript">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
