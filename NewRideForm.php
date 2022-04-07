<?php include_once "header.php"; ?>
  <div id="content" class="content">
      <div class="items">
        <!--safe command, complete validation and submission in this page: action="lessthanchar?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"-->
        
        <form action="AddRides.php" method="post">
          <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Name:</label>
            <div class="col-8">
              <input id = "text" type="text" name="name" pattern="[a-zA-Z\d\-\s]+" 
                     class="form-control" required="required">
            </div>
          </div>

          <div class="form-group row">
            <label for="description" class="col-4 col-form-label">Ride Description:</label>
            <div class="col-8">  
              <textarea name="description" rows="5" cols="40" class="form-control"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="riders" class="col-4 col-form-label">Number of Riders (Lifetime):</label>
            <div class="col-8"><input type="number" name="numRiders"
                                      onkeydown="if(event.key==='.'){event.preventDefault();}"
                                      oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                                      class="form-control" required>
            </div>
          </div>

          <div class="form-group row">
          <label class="col-4 col-form-label">Minimum Rider Height (Inches):</label>
          <div class="col-8"><input type="number" name="minRiderHeight" min =0 max=84 step=".01"
                                    class="form-control"></div>
          </div>
          
          <div class="form-group row">
          <label class="col-4 col-form-label">Currently In Operation:</label>
          <div class="col-8"><input type="checkbox" name="isOperating" checked value="true"></div>
          </div>
          
          <div class="form-group row">
          <label class="col-4 col-form-label">Date First Opened:</label>
          <div class="col-8"><input type="date" name="firstOpened" value="<?php echo date("Y-m-d"); ?>"
                                    class="form-control" required min="2022-01-01"></div>
          </div>
          
          <div class="form-group row">
          <label class="col-4 col-form-label">Capacity (Number of People):</label>
          <div class="col-8"><input type="number" name="capacity" min=1 max=100 maxlength="3"
                                    onkeydown="if(event.key==='.'){event.preventDefault();}"
                                    oninput="event.target.value = event.target.value.replace(/[^0-9]*/g,'');"
                                    class="form-control" required></div>
          </div>
          
          <div class="form-group row">
          <label class="col-4 col-form-label">Speed (Miles per Hour):</label>
          <div class="col-8"><input type="number" name="speed" min=0 max 160 step=".01"
                                    class="form-control" required></div>
          </div>

          <div class="form-group row">
          <label class="col-4 col-form-label">Duration (Minutes):</label>
          <div class="col-8"><input type="number" name="duration" min=0.5 max=20 step=".01" 
                                    class="form-control" required></div>
          </div>

          <div class="form-group row">
            <label class="col-4 col-form-label">Operation Hours:</label> 
            <div class="col-8">
              <input type="time" name="openingTime" min="06:00" max="12:00"
                     class="form-control" required><small>Opening time between 6 am and 12 pm</small>
              <input type="time" name="closingTime" min="15:00" max="22:00"
                     class="form-control" required><small>Closing time between 3 pm and 10 pm</small></div>
          </div>

          <div class="form-group row">
          <label class="col-4 col-form-label">Location:</label>
          <div class="col-8"><input type="text" name="location" pattern="[a-zA-Z\d\-\s]+" 
                                    class="form-control" required></div>
          </div>

          <input type="submit">
        </form>
      </div>
    </div>
<?php include_once "footer.php"; ?>