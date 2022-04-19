<?php
  include_once 'repair.process.php';
  include_once 'includes/dbh.inc.php';
  include_once 'header.php';
?>

<?php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    exit;
}

  $ride_id = '';
  $date_start = '';
  $date_close = '';
  $description = 'Enter description...';
  $cost = '0';
  $attraction_type = '';
  $id = 0;
  $update = false;
  $finished = false;

	if (isset($_GET['edit'])) {
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      $_SESSION['message'] = 'Please log in first';
      $_SESSION['msg_type'] = 'danger';
      header("Location: index.php");
    }

		$id = $_GET['edit'];
		$update = true;
    $record = mysqli_query($conn, "SELECT * FROM maintaince_tickets WHERE id=$id");
		$n = mysqli_fetch_array($record);

    $id = $n['id'];
    $ride_id = $n['ride_id'];
    $start = $n['date_opened'];
    $date_start = new DateTime($start);

    $description = $n['ticket_discription'];
    $attraction_type = $n['attraction_type'];
    $cost = $n['cost_of_repair'];
    $close = $n['date_closed'];
    $date_close = new DateTime($close);

    $finished = $n['ticket_status'];
	}
?>


<!-- Mainpage -->
<div id="content" class="content">
  <div class="items">
    <?php
    if(isset($_SESSION['message'])): ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">
      <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
       ?>
    </div>
  <?php endif ?>
    <form action="repair.process.php" method="post">

  <div class="form-group row">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <label for="select" class="col-4 col-form-label">Ride ID: </label>
    <div class="col-8">
      <select id="select" name="ride_id" class="custom-select">
        <option value="-1">
          Please select one...
        </option>
        <?php
        $query = 'SELECT * FROM rides WHERE is_deleted=0;';
        $result = $conn->query($query);

        while($row = $result->fetch_assoc()): ?>

        <option <?php if($ride_id==$row['ride_id']) echo " selected=selected "?> value="<?php echo $row['ride_id']; ?>"><?php echo $row['ride_name']; ?></option>
      <?php endwhile; ?>

      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="start" class="col-4 col-form-label">Start date:</label>
    <div class="col-8">
    <input type="date" id="start" name="maintance-start"
       value="<?php if ($date_start=='') {echo '';}
       else {echo $date_start->format('Y-m-d');}?>"
       min="2022-04-19" max="2032-12-31">
    </div>
  </div>

  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Ticket Description</label>
    <div class="col-8">
      <textarea id="textarea" name="ticket-description" placeholder="Enter Description..." cols="40" rows="5" class="form-control"><?php echo $description; ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Attraction type</label>
    <div class="col-8">
      <select id="select" name="attraction-type" class="custom-select">
        <option value="none">Please select one...</option>
        <option value="ride" <?php if($attraction_type=='ride') echo " selected=selected "?>>Ride</option>
        <option value="game" <?php if($attraction_type=='game') echo " selected=selected "?>>Game</option>
        <option value="event" <?php if($attraction_type=='event') echo " selected=selected "?>>Event</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label" value="<?php echo $cost_of_repair; ?>" placeholder="$">Cost of Repair</label>
    <div class="col-8">
      <input value=<?php echo $cost; ?> name="repair-cost" type="text" class="form-control" aria-describedby="text2HelpBlock">
    </div>
  </div>
  <div class="form-group row">
    <label for="close" class="col-4 col-form-label">Close date:</label>
    <div class="col-8">
    <input type="date" id="close" name="maintaince-close"
    value="<?php if ($date_close=='') {echo '';}
    else {echo $date_close->format('Y-m-d');}?>"
       min="2022-04-19" max="2032-12-31">
    </div>
  </div>

  <div class="form-check">
  <input class="form-check-input" type="checkbox" name="repair-finished"
  <?php if($finished==true) echo " checked "?>
  value="1"/>
  <label class="form-check-label">
    Finished
  </label>
</div>


  <div class="form-group row">
    <div class="offset-4 col-8">
      <?php if ($update == true): ?>
	<button name="update" type="submit" class="btn btn-primary">Update</button>
<?php else: ?>
  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
<?php endif ?>

    </div>
  </div>
</form>


  </div>
</div>




<?php
  include_once 'footer.php';
 ?>
