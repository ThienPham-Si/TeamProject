<?php
  include_once 'header.php';
?>
<!-- Mainpage -->
<div id="content" class="content">
  <div class="items">
    <form method="post">

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Case ID</label>
    <div class="col-8">
      <input id="text" name="text" type="text" class="form-control" required="required">
    </div>
  </div>

  <div class="form-group row">
    <label for="start" class="col-4 col-form-label">Start date:</label>
    <div class="col-8">
    <input type="date" id="start" name="maitiance-start"
       value="2022-03-25"
       min="2022-03-25" max="2032-12-31">
    </div>
  </div>

  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Ticket Description</label>
    <div class="col-8">
      <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Attraction type</label>
    <div class="col-8">
      <select id="select" name="select" class="custom-select">
        <option value="ride">Ride</option>
        <option value="game">Game</option>
        <option value="event">Event</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Cost of Repair</label>
    <div class="col-8">
      <input id="text2" name="text2" type="text" class="form-control" aria-describedby="text2HelpBlock">
    </div>
  </div>
  <div class="form-group row">
    <label for="close" class="col-4 col-form-label">Close date:</label>
    <div class="col-8">
    <input type="date" id="close" name="maintaince-close"
       value="2022-03-25"
       min="2022-03-25" max="2032-12-31">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


  </div>
</div>




<?php
  include_once 'footer.php';
 ?>
