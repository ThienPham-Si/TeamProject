<?php
  require_once "header.php";
  require_once "includes/dbh.inc.php";
?>

<div id="content" class="content">
  <div class="items">
  <p>Only events that haven't happened yet can be updated. Select an event to update: </p>
    <form method="POST" action="" name="selected_event">
      <?php
      $query = "SELECT event_id, event_name
                FROM `Theme_Park_Database`.`park_events`
                WHERE `Theme_Park_Database`.`park_events`.event_date >= current_date()
                ORDER BY event_id";
      if ($result = mysqli_query($conn, $query)) {
        echo '<select id="select" name="event_id" onchange="this.form.submit()">
            <option value="" disabled selected>--select--</option>';
        while ($row = mysqli_fetch_array($result)) {
          echo
          '<option value="' . $row['event_id'] . '"> ' . $row['event_name'] . '</option>';
        }
        echo '</select>';
      } else {
        echo 'Unable to find events to modify, please try again later.';
      }
      ?>
    </form>

    <?php
    if (isset($_POST["event_id"])) {
      $event = $_POST["event_id"];
      $getEvent = 'SELECT * from `Theme_Park_Database`.`park_events` WHERE event_id=' . $_POST["event_id"];
      if ($result = mysqli_query($conn, $getEvent)) {
        $row = mysqli_fetch_array($result);
        $opening = date("H:i", strtotime($row['start_time']));
        $closing = date("H:i", strtotime($row['end_time']));
        echo '
        <form action="" method="post">
          <div class="form-group row">
            <label for="text" class="col-4 col-form-label">
              Name:
            </label>
            <div class="col-8">
              <input id = "text"
              type="text"
              name="name"
              pattern="[a-zA-Z\d\-\s]+"
              class="form-control"
              value="' . $row['event_name'] . '"
              required>
            </div>
          </div>

          <div class="form-group row">
            <label for="description" class="col-4 col-form-label">
              Event Description:
            </label>
            <div class="col-8">
              <textarea name="description"
                rows="5"
                cols="40"
                class="form-control" required>' . $row['event_description'] . '</textarea>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label">
              Event Coordinator:
            </label>
            <div class="col-8">';

            $getCoordinators = "SELECT employee_id, first_name, m_name, last_name
              FROM `Theme_Park_Database`.`employees`
              WHERE `Theme_Park_Database`.`employees`.`employee_role`='Event Coordinator'
              ORDER BY employee_id";

            if ($found = mysqli_query($conn, $getCoordinators)) {
              echo ('
                <select id="select" name="coordinator" required>
                <option value="" disabled selected>--select--</option>
              ');
              while ($fetchedCoordinator = mysqli_fetch_array($found)) {
                echo
                '<option value="' . $fetchedCoordinator['employee_id'];
                if ($fetchedCoordinator['employee_id'] == $row['event_coordinator']) {
                  echo '" selected="selected"';
                }
                echo '>' . $fetchedCoordinator['first_name'] . ' '
                  . $fetchedCoordinator['m_name'] . ' '
                  . $fetchedCoordinator['last_name'] . '</option>';
              }
              echo '</select>';
            } else {
              echo '<p>Unable to find event coordinators, please try again later.</p>';
            }
            echo ' </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label">
              Capacity:
            </label>
            <div class="col-8">
              <input
                type="number"
                name="capacity"
                min=1
                max=100
                maxlength="3"
                onkeydown="if(event.key===' . '){event.preventDefault();}"
                oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,\'\');"
                class="form-control"
                value="' . $row["capacity"] . '"
                required>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label">Event Canceled:</label>
            <div class="col-8">';
              echo '<input type="checkbox" name="isCancelled"';
              if((bool)$row['is_cancelled'] == true)
                echo 'checked value="true">';
              else
                echo '>';
              echo '
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label">
              Event Date:
            </label>
            <div class="col-8">
              <input
                type="date"
                name="date"
                class="form-control"
                value=' . $row['event_date'] . '
                min=' . date("Y-m-d") . '
                required>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label">
              Event Duration (Between 7 am and 10 pm)
            </label>

            <div class="col-8">
              <small>Start Time</small>
              <input
                type="time"
                name="startTime"
                min="07:00"
                max="22:00"
                class="form-control"
                value="' . $opening . ':00"
                required>

              <small>End Time</small>
              <input
                type="time"
                name="endTime"
                min="7:00"
                max="22:00"
                class="form-control"
                value="' . $closing . ':00"
                required>
                <br>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label">
              Location:
            </label>
            <div class="col-8">';

            $getLocations = "SELECT location_id, location
                            FROM `Theme_Park_Database`.`locations`
                            ORDER BY location_id";

            if ($locResult = mysqli_query($conn, $getLocations)) {
              echo ('<select id="select" name="location" required>
                      <option value="" disabled selected>--select--</option>');
              while ($fetchedLocations = mysqli_fetch_array($locResult)) {
                echo '<option value="' . $fetchedLocations['location_id'] . '"';
                if($fetchedLocations['location_id'] == $row['location'])
                  echo ' selected';
                echo '>' . $fetchedLocations['location'] . '</option>';
              }
              echo '</select>';
            } else {
              echo '<p>Unable to find event locations, please try again later.</p>';
            }
              echo '
            </div>
          </div>

          <input type="hidden"
            value="' . $_POST["event_id"] . '"
            name="id" />

          <input type="submit"
            name= "updated_event"
            value="Update Changes">
        </form>';
      }
    }
    ?>

    <?php
    require_once "Validate.php";

    if (isset($_POST["updated_event"])) {
      $id = $_POST["id"];
      $name = $description = $coordinator = $date = $capacity = $isCancelled = $startTime = $endTime = $location = "";

      $name = validate($_POST["name"]);
      $escape = trim($_POST["description"]);
      $description = mysqli_real_escape_string($conn, $escape);
      $date = validate($_POST['date']);
      $capacity = validate($_POST["capacity"]);
      $coordinator = validate($_POST['coordinator']);
      if(isset($_POST['isCancelled']))
        $isCancelled = "TRUE";
      else
        $isCancelled = "FALSE";
      $startTime = validate($_POST["startTime"]);
      $endTime = validate($_POST["endTime"]);
      $location = validate($_POST["location"]);

      $updateRow = "UPDATE `Theme_Park_Database`.`park_events`
        SET
          `event_name`='$name',
          `event_description`='$description',
          `capacity`=$capacity,
          `event_coordinator`='$coordinator',
          `event_date`='$date',
          `is_cancelled`=$isCancelled,
          `start_time`='$startTime',
          `end_time`='$endTime',
          `location`='$location'
        WHERE `event_id`=$id;";

      try {
        if (mysqli_query($conn, $updateRow)) {
          echo "Changes updated! View events to see the change.";
        } else {
          echo 'Changes not updated - something went wrong!';
        }
      } catch (mysqli_sql_exception $e) {
        echo '<p class="items">Unable to display rainouts.</p>';
      }
    }

    ?>

  </div>
</div>

<?php
  $conn->close();
  include_once "footer.php";
?>
