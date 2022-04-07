<?php
  include_once 'header.php';
?>
<!-- Mainpage -->
<div id="content" class="content">
  <div class="items">
    <form action="includes/repair.inc.php" method="post">

  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Ride ID: </label>
    <div class="col-8">
      <select id="select" name="ride_id" class="custom-select">
        <option value="1">1) Carrot Carousel</option>
        <option value="5">5) Medusa</option>
        <option value="6">6) Zipper</option>
        <option value="7">7) Wipeout</option>
        <option value="8">8) Waltzer</option>
        <option value="9">9) UFO</option>
        <option value="10">10) Ultramax</option>
        <option value="11">11) Twist</option>
        <option value="12">12) Turbo Drop</option>
        <option value="13">13) Topple Tower</option>
        <option value="14">14) Top Scan</option>
        <option value="15">15) Teacups</option>
        <option value="17">17) Frog Coaster</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="start" class="col-4 col-form-label">Start date:</label>
    <div class="col-8">
    <input type="date" id="start" name="maintance-start"
       value="2022-04-19"
       min="2022-04-19" max="2032-12-31">
    </div>
  </div>

  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Ticket Description</label>
    <div class="col-8">
      <textarea id="textarea" name="ticket-description" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Attraction type</label>
    <div class="col-8">
      <select id="select" name="attraction-type" class="custom-select">
        <option value="ride">Ride</option>
        <option value="game">Game</option>
        <option value="event">Event</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Cost of Repair</label>
    <div class="col-8">
      <input id="text2" name="repair-cost" type="text" class="form-control" aria-describedby="text2HelpBlock">
    </div>
  </div>
  <div class="form-group row">
    <label for="close" class="col-4 col-form-label">Close date:</label>
    <div class="col-8">
    <input type="date" id="close" name="maintaince-close"
       value="2022-04-19"
       min="2022-04-19" max="2032-12-31">
    </div>
  </div>

  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" name="repair-finished" />
  <label class="form-check-label" for="defaultCheck1">
    Finished
  </label>
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
