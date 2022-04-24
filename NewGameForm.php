<?php include_once "header.php";
      include_once "includes/dbh.inc.php" ?>
  <div id="content" class="content">
      <div class="items">
        <!--safe command, complete validation and submission in this page: action="lessthanchar?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"-->
        
        <form action="AddGames.php" method="post">
          <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Name:</label>
            <div class="col-8">
              <input id = "text" type="text" name="name" pattern="[a-zA-Z\d\-\s]+" 
                     class="form-control" required="required">
            </div>
          </div>

          <div class="form-group row">
            <label for="description" class="col-4 col-form-label">Game Description:</label>
            <div class="col-8">  
              <textarea name="description" rows="5" cols="40" class="form-control"></textarea>
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
                required>
            </div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label">
              Currently In Operation:
            </label>
            <div class="col-8">
              <input 
                type="checkbox" 
                name="isOperating" 
                checked 
                value="true">
            </div>
          </div>
         
          <div class="form-group row">
            <label class="col-4 col-form-label">
              Operation Hours:
            </label> 
            <div class="col-8">
              <input type="time" name="openingTime" min="06:00" max="12:00"
                     class="form-control" required><small>Opening time between 6 am and 12 pm</small>
              <input type="time" name="closingTime" min="15:00" max="22:00"
                     class="form-control" required><small>Closing time between 3 pm and 10 pm</small></div>
          </div>

          <div class="form-group row">
          <label class="col-4 col-form-label">
            Game Location:
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
                  '<option value="' . $row['location'] . '">' . $row['location'] . '</option>';
                }
                echo '</select>';
              }
            } catch(mysqli_sql_exception $e) {
              echo '<p>Unable to find carnival game locations, please try again later.</p>';
            }
            ?>
          </div>
        </div>
        <input type="submit">
        </form>
      </div>
    </div>
<?php include_once "footer.php"; ?>