<?php 
  include_once "header.php"; 
  include_once "includes/dbh.inc.php"
?>
<div id="content" class="content">
  <div class="items">  
    <form action="" method="post">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">
          Location Name:
        </label>
        <div class="col-8">
          <input 
          id = "text" 
          type="text" 
          name="location" 
          pattern="[a-zA-Z\d\-\s\']+" 
          class="form-control" 
          required>
        </div>
      </div>

      <input 
        type="submit"
        name="new_location"
      >
    </form>

    <?php
      require_once "Validate.php";

      if(isset($_POST["new_location"])) {
        $location = validate($_POST["location"]);

        $addRow = "INSERT INTO `Theme_Park_Database`.`locations`
        (`location`) VALUES ('$location');";

        try {
        if (mysqli_query($conn, $addRow)) {
          echo "<p class='items'>New record created successfully! View or add more locations through the menu!</p>";
        }
        } catch (mysqli_sql_exception $e) {
        echo "Unable to create a new location - something went wrong!";
        }
      }
      $conn->close();
    ?>
  </div>
</div>

<?php include_once "footer.php"; ?>