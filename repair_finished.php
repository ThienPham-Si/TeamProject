<?php
  include_once 'includes/dbh.inc.php';
  include_once 'header.php';
?>
<div id="content" class="content">
  <div class="table-wrap">
  <table class="table table-striped table-hover table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ride ID</th>
      <th scope="col">Date Opened</th>
      <th scope="col">Date Closed</th>
      <th scope="col">Description</th>
      <th scope="col">Repair Cost</th>
      <th scope="col">Attraction Type</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
  $query = 'SELECT * FROM maintaince_tickets WHERE ticket_status=1;';
  $result = $conn->query($query);

  while($row = $result->fetch_assoc()): ?>
  <tr>
    <th><?php echo $row['id']; ?></th>
    <td><?php echo $row['ride_id']; ?></td>
    <td><?php echo $row['date_opened']; ?></td>
    <td><?php echo $row['date_closed']; ?></td>
    <td><?php echo $row['ticket_discription']; ?></td>
    <td><?php echo $row['cost_of_repair']; ?></td>
    <td><?php echo $row['attraction_type']; ?></td>
    <td>
      <a href="repair.php?edit=<?php echo $row['id']; ?>" class="btn btn-primary btn-block mb-4">Edit</a>
      <a href="repair.process.php?delete=<?php echo $row['id']; ?>" class="btn btn-primary btn-block mb-4">Delete</a>
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
