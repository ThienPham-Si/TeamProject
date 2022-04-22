<?php include_once "header.php"; ?>
  <div id="content" class="content">
      <div class="items">
        <!--safe command, complete validation and submission in this page: action="lessthanchar?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"-->

        <form action="" method="post">
          <div class="form-group row">
            <label class="col-4 col-form-label">Rainout Date:</label>
            <div class="col-8">
              <input
                type="date"
                name="rainoutDate"
                value="<?php echo date("Y-m-d"); ?>"
                class="form-control"
                required
                min="2022-01-01">
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label">Number of Canceled Events:</label>
            <div class="col-8">
              <input
                type="number"
                name="canceledEvents"
                onkeydown="if (event.key === '.') { event.preventDefault(); }"
                oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                class="form-control"
                required>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label">Number of Closed Rides:</label>
            <div class="col-8">
              <input
                type="number"
                name="closedRides"
                onkeydown="if (event.key === '.') { event.preventDefault(); }"
                oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                class="form-control"
                required>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label">Revenue Earned</label>
            <div class="col-8">
              <input
                type="number"
                name="revenue"
                min=0
                max=10000000
                step=".01"
                class="form-control">
            </div>
          </div>

          <input
            type="submit"
            name="add_rainout"
            value="Add Rainout">
        </form>

<?php

  include_once "includes/dbh.inc.php";
  require_once "Validate.php";

  if(isset($_POST["add_rainout"])) {
    $date = $canceledEvents = $closedRides = $revenue = "";
    $date = validate($_POST["rainoutDate"]);
    $canceledEvents = validate($_POST["canceledEvents"]);
    $closedRides = validate($_POST["closedRides"]);
    $revenue = validate($_POST["revenue"]);

    $addRow = "INSERT INTO `Theme_Park_Database`.`rainouts` (
      `date_of_rainout`,
      `number_of_cancelled_events`,
      `number_of_closed_rides`,
      `revenue_earned`
    ) VALUES (
      '$date',
      $canceledEvents,
      $closedRides,
      $revenue
    );";

    try {
      if (mysqli_query($conn, $addRow)) {
        echo "<p class='items'>Recorded today's rainout!</p>";
      }
    } catch (mysqli_sql_exception $e) {
      echo 'Unable to add rainout.';
    }
  }
  $conn->close();
  echo '</div>
  </div>';

  include_once "footer.php"; ?>
