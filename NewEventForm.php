<?php
include_once "header.php";
include_once "includes/dbh.inc.php"
?>
<div id="content" class="content">
  <div class="items">

    <form action="AddEvents.php" method="post">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">
          Name:
        </label>
        <div class="col-8">
          <input id="text" type="text" name="name" pattern="[a-zA-Z\d\-\s\']+" class="form-control" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="description" class="col-4 col-form-label">
          Event Description:
        </label>
        <div class="col-8">
          <textarea name="description" rows="5" cols="40" class="form-control"></textarea>
          <br>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-4 col-form-label">
          Event Coordinator:
        </label>
        <div class="col-8">
          <?php
          $query = "SELECT employee_id, first_name, m_name, last_name 
                        FROM `Theme_Park_Database`.`employees` 
                        WHERE `Theme_Park_Database`.`employees`.`employee_role`='Event Coordinator'
                        ORDER BY employee_id";
          try {
            if ($result = mysqli_query($conn, $query)) {
              echo ('
                    <select id="select" name="coordinator" required>
                    <option value="" disabled selected>--select--</option>
                  ');
              while ($row = mysqli_fetch_array($result)) {
                echo
                '<option value="' . $row['employee_id'] . '">' . $row['first_name'] . ' '
                  . $row['m_name'] . ' '
                  . $row['last_name'] . '</option>';
              }
              echo '</select>';
            }
          } catch(mysqli_sql_exception $e) {
            echo '<p class="items">Unable to find event coordinators, please try again later.</p>';
          }
          ?>
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
          Event Capacity:
        </label>
        <div class="col-8">
          <input type="number" name="capacity" min=1 max=100 maxlength="3" onkeydown="if(event.key==='.'){event.preventDefault();}" oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');" class="form-control" required>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-4 col-form-label">Event Duration (Between 7 am and 10 pm):</label>
        <div class="col-8">
          <small>Start Time:</small>
          <input type="time" name="startTime" min="07:00" max="22:00" class="form-control" required>
          <small>End Time:</small>
          <input type="time" name="endTime" min="07:00" max="23:00" class="form-control" required>
          <br>
        </div>

        <div class="form-group row">
          <label class="col-4 col-form-label">
            Event Location:
          </label>
          <div class="col-8">
            <?php
            $query = "SELECT location_id, location
                        FROM `Theme_Park_Database`.`locations` 
                        ORDER BY location_id";
            try {
              if ($result = mysqli_query($conn, $query)) {
                echo ('
                    <select id="select" name="location" required>
                    <option value="" disabled selected>--select--</option>
                  ');
                while ($row = mysqli_fetch_array($result)) {
                  echo
                  '<option value="' . $row['location_id'] . '">' . $row['location'] . '</option>';
                }
                echo '</select>';
              }
            } catch(mysqli_sql_exception $e) {
              echo '<p class="items">Unable to find event locations, please try again later.</p>';
            }
            ?>
          </div>
        </div>
        <input type="submit">
    </form>
  </div>
</div>
<?php include_once "footer.php"; ?>