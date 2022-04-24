<?php 
  require_once "header.php";
   require_once "includes/dbh.inc.php";
?>

<div id="content" class="content">
  <div class="items">
  <p>Enter the carnival game to modify: </p>
  <form method="POST" action="">
    <?php 
      $query = "SELECT id, carnival_name FROM `Theme_Park_Database`.`carnival_games` ORDER BY id";
      if($result = mysqli_query($conn, $query)) {
        echo '<select id="select" name="game_selected" class="custom-select" onchange="this.form.submit()">
        <option value="" disabled selected>--select--</option>';
        while($row = mysqli_fetch_array($result)) {
          echo '<option value="' .$row['id'] . '"> '. $row['carnival_name'] .'</option>';
        }
        echo '</select>';
      } else {
        echo 'Unable to find rides to modify, please try again later.';
      }
    ?>
  </form>
  
  <?php 
    if(isset($_POST["game_selected"])) {
      $modify = $_POST["game_selected"];
      $modifyQuery = 'SELECT * from `Theme_Park_Database`.`carnival_games` WHERE id=' . $modify;
      if($result = mysqli_query($conn, $modifyQuery)) {
        while($row = mysqli_fetch_array($result)) {
          $time = explode(" - ",$row["hours_of_operation"]);
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
                value="' . $row['carnival_name'] . '"
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
                  class="form-control" 
                  required>'
                  . $row['carnival_description'] .
                '</textarea>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-4 col-form-label">
                Cost per Round:
              </label>
              <div class="col-8">
                <input 
                  type="number" 
                  name="cost" 
                  min=0.01 
                  max=10 
                  step=".01" 
                  class="form-control"
                  value="'.$row["cost_per_round"].'" 
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
                Game Location:
              </label>
              <div class="col-8">';
              $getLocations = "SELECT location_id, location
                        FROM `Theme_Park_Database`.`locations` 
                        ORDER BY location_id";
            try {
              if ($locResult = mysqli_query($conn, $getLocations)) {
                echo ('<select id="select" name="location" required>');
                while ($fetchedLocations = mysqli_fetch_array($locResult)) {
                  echo '<option value="' . $fetchedLocations['location'];
                  if($fetchedLocations['location'] == $row['carnival_location'])
                    echo ' selected';
                  echo '">' . $fetchedLocations['location'] . '</option>';
                }
                echo '</select>';
              }
            } catch(mysqli_sql_exception $e) {
              echo '<p>Unable to find theme park locations, please try again later.</p>';
            }
        echo '</div>
            </div>

            <input type="hidden" 
              value="' . $modify. '" 
              name="modifyMe" />
            
            <input type="submit" 
              name= "updated_game" 
              value="Update Changes">
          </form>';
        }
      }
    }
  ?>

  <?php 
    require_once "Validate.php";

    if(isset($_POST["updated_game"])) {
      $id = $_POST["modifyMe"];
      
      $name = $description = $cost = $isOperating = $openingTime = $closingTime = $operationHours = $location = "";
      $name = validate($_POST["name"]);
      if(isset($_POST["description"])) {
        $escape = trim($_POST["description"]);
        $description = mysqli_real_escape_string($conn, $escape);
      }
      $cost = validate($_POST["cost"]);
      $openingTime = validate($_POST["openingTime"]);
      $closingTime = validate($_POST["closingTime"]);
      $combined = date("g:i a", strtotime($openingTime)) . " - " . date("g:i a", strtotime($closingTime));
      $operationHours = mysqli_real_escape_string($conn, $combined);
      $location = validate($_POST["location"]);

      $updateRow = "UPDATE `Theme_Park_Database`.`carnival_games`
      SET
        `carnival_name` = '$name',
        `carnival_location` = '$location',
        `carnival_description` = '$description',
        `hours_of_operation` = '$operationHours',
        `cost_per_round` = $cost
      WHERE `id` = $id;";


    try {
      if(mysqli_query($conn, $updateRow)) {
        echo "Changes updated! View the table to see the change.";
      } 
    } catch (mysqli_sql_exception $e) {
      echo "Error: unable to add the change.";
    }
  }
?>

  </div>
</div>

<?php 
  $conn->close();
  include_once "footer.php";
?>