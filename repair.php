<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Group Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>

  <!-- Sidebar -->
<div class="flex-shrink-0 p-3 sidebar-menu" id="sidebar">
  <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
    <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
    <span class="fs-5 fw-semibold">Theme Park</span>
  </a>
  <ul class="list-unstyled ps-0">
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
        Home
      </button>
      <div class="collapse show" id="home-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="index.php" class="link-dark rounded">Overview</a></li>
          <li><a href="#" class="link-dark rounded">Updates</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
        Reports
      </button>
      <div class="collapse" id="dashboard-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="#" class="link-dark rounded">Overview</a></li>
          <li><a href="#" class="link-dark rounded">Monthly</a></li>
        </ul>
      </div>
    </li>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
        Maintaince
      </button>
      <div class="collapse" id="orders-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="repair.php" class="link-dark rounded">New</a></li>
          <li><a href="#" class="link-dark rounded">Processing</a></li>
          <li><a href="#" class="link-dark rounded">Finished</a></li>
        </ul>
      </div>
    </li>
    <li class="border-top my-3"></li>
    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
        Account
      </button>
      <div class="collapse" id="account-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="login.php" class="link-dark rounded">Profile</a></li>
          <li><a href="#" class="link-dark rounded">Settings</a></li>
          <li><a href="#" class="link-dark rounded">Sign out</a></li>
        </ul>
      </div>
    </li>
  </ul>
</div>
<!-- Mainpage -->
<div id="content" class="content">
  <div class="items">
    <form>

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




    <script src="script.js" type="text/javascript">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
