<?php 
  require_once "header.php";
   require_once "includes/dbh.inc.php";
?>

<div id="content" class="content">
  <div class="items">
  <p>Enter a ride name to modify: </p>
  <form method="POST" action="" name="selected_ride">
    <?php 
      $query = "SELECT ride_id, ride_name FROM `Theme_Park_Database`.`rides` ORDER BY ride_id";
      if($result = mysqli_query($conn, $query)) {
        echo '<select id="select" name="ride_id" class="custom-select" onchange="this.form.submit()">
        <option value="" disabled selected>--select--</option>';
        while($row = mysqli_fetch_array($result)) {
          echo 
          '<option value="' .$row['ride_id'] . '"> '. $row['ride_name'] .'</option>';
        }
        echo '</select>';
      } else {
        echo 'Unable to find rides to modify, please try again later.';
      }
    ?>
  </form>
  
  <?php 
    if(isset($_POST["ride_id"])) {
      $ride = $_POST["ride_id"];
      $getRide = 'SELECT * from `Theme_Park_Database`.`rides` WHERE ride_id=' . $_POST["ride_id"];
      if($result = mysqli_query($conn, $getRide)) {
        while($row = mysqli_fetch_array($result)) {
          $time = explode(" - ",$row["operation_hours"]);
          $opening = date("H:i", strtotime($time[0]));
          $closing = date("H:i", strtotime($time[1]));
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
                value="' . $row['ride_name'] . '"
                required>
              </div>
            </div>
            
            <div class="form-group row">
              <label for="description" class="col-4 col-form-label">
                Ride Description:
              </label>
              <div class="col-8">  
                <textarea name="description" 
                  rows="5" 
                  cols="40" 
                  class="form-control" required>'
                  . $row['ride_description'] .
                '</textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="riders" class="col-4 col-form-label">
                Number of Riders (Lifetime):
              </label>
              <div class="col-8">
              <input type="number" name="numRiders"
                onkeydown="if(event.key==='.'){event.preventDefault();}"
                oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,\'\');"
                class="form-control" 
                value="' .$row['number_of_riders'] . '"
                required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-4 col-form-label">
                Minimum Rider Height (Inches):
              </label>
              <div class="col-8">
                <input 
                  type="number" 
                  name="minRiderHeight" 
                  min =0 
                  max=84 
                  step=".01"
                  class="form-control"
                  value="'. $row['min_height_inches'] . '">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-4 col-form-label">
                Capacity (Number of People):
              </label>
              <div class="col-8">
                <input 
                  type="number" 
                  name="capacity" 
                  min=1 
                  max=100 
                  maxlength="3"
                  onkeydown="if(event.key==='.'){event.preventDefault();}"
                  oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,\'\');"
                  class="form-control" 
                  value="' . $row["ride_capacity"] . '"
                  required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-4 col-form-label">
                Duration (Minutes):
              </label>
              <div class="col-8">
                <input 
                  type="number" 
                  name="duration" 
                  min=0.5 
                  max=20 
                  step=".01" 
                  class="form-control"
                  value="'.$row["ride_duration"].'" 
                  required>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-4 col-form-label">
                Operation Hours:
              </label> 
              <div class="col-8">
                <input 
                  type="time" 
                  name="openingTime" 
                  min="06:00" 
                  max="12:00"
                  class="form-control"
                  value="'. $opening.':00"
                  required>
                <small>
                  Opening time between 6 am and 12 pm
                </small>
                <input 
                  type="time" 
                  name="closingTime" 
                  min="15:00" 
                  max="22:00"
                  class="form-control"
                  value="'. $closing.':00"
                  required>
                <small>
                  Closing time between 3 pm and 10 pm
                </small>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-4 col-form-label">
                Location:
              </label>
              <div class="col-8">
                <input 
                  type="text" 
                  name="location" 
                  pattern="[a-zA-Z\d\-\s]+" 
                  class="form-control" 
                  value="' . $row["location"] . '"
                  required>
              </div>
            </div>


            <input type="hidden" 
              value="' . $_POST["ride_id"]. '" 
              name="id" />
            
            <input type="submit" 
              name= "updated_ride" 
              value="Update Changes">
          </form>';
        }
      }
    }
  ?>

  <?php 
    require_once "Validate.php";

    if(isset($_POST["updated_ride"])) {
      $id = $_POST["id"];
      
      $name = $description = $numRiders = $minRiderHeight = $capacity = $duration = $openingTime = $closingTime = $combined = $operationHours = $location = "";
      $name = validate($_POST["name"]);
      
      $escape = trim($_POST["description"]);
      $description = mysqli_real_escape_string($conn, $escape);
      
      $numRiders = validate($_POST["numRiders"]);
      $minRiderHeight = validate($_POST["minRiderHeight"]);
      
      $capacity = validate($_POST["capacity"]);
      $duration = validate($_POST["duration"]);
      
      $openingTime = validate($_POST["openingTime"]);
      $closingTime = validate($_POST["closingTime"]);
      $combined = date("g:i a", strtotime($openingTime)) . " - " . date("g:i a", strtotime($closingTime));
      $operationHours = mysqli_real_escape_string($conn, $combined);
      
      $location = validate($_POST["location"]);

      $updateRow = "UPDATE `Theme_Park_Database`.`rides`
        SET 
          `ride_name`='$name', 
          `ride_description`='$description',
          `number_of_riders`=$numRiders,
          `min_height_inches`=$minRiderHeight,
          `ride_capacity`=$capacity,
          `ride_duration`=$duration,
          `operation_hours`='$operationHours',
          `location`='$location'
        WHERE `ride_id`=$id;";
  
      if(mysqli_query($conn, $updateRow)) {
        echo "Changes updated! View rides to see the change.";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }

  ?>

  </div>
</div>

<?php 
  $conn->close();
  include_once "footer.php";
?>