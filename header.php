<?php session_start();?>

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
  <a id="logo-a" href="index.php" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
    <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
    <span><img id="logo" src="includes/logo.png" /></span>
    <span class="fs-5 fw-semibold" style="font-family: 'Comic Sans MS', 'Comic Sans', cursive;">Adventure Park</span>
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
          <li><a href="monthlyReportForm.php" class="link-dark rounded">Overview</a></li>
          <li><a href="#" class="link-dark rounded">Monthly</a></li>
        </ul>
      </div>
    </li>

    <?php
      echo '<li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#info-collapse" aria-expanded="false">
        Information
      </button>
      <div class="collapse" id="info-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <li><a href="ViewLocations.php" class="link-dark rounded">View Locations</a></li>';
          if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ ; }
          else  //only logged in users can view employee info
            echo '<li><a href="ViewEmployee.php" class="link-dark rounded">View Employee</a></li>
            <li><a href="ViewRainouts.php" class="link-dark rounded">View Rainouts</a></li>
            <li><a href="Display_Hotels.php" class="link-dark rounded">View Hotels</a></li>
            <li><a href="Display_dining.php" class="link-dark rounded">View Dining</a></li>';
        //only admins can add important Theme Park Info
        if(isset($_SESSION["role"]) && $_SESSION["role"]=='admin')
          echo'<li><a href="AddLocations.php" class="link-dark rounded">Add Locations</a></li>
          <li><a href="AddRainouts.php" class="link-dark rounded">Add Rainouts</a></li>';
        echo '
        </ul>
      </div>
    </li>';
    ?>

    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#entities-collapse" aria-expanded="false">
        Attractions
      </button>
      <div class="collapse" id="entities-collapse"><ul>

        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#rides-collapse" aria-expanded="false">
        Rides
        </button>
        <div class="collapse" id="rides-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="ViewRides.php" class="link-dark rounded">View Rides</a></li>
          <?php
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)
              echo '<li><a href="NewRideForm.php" class="link-dark rounded">Add Rides</a></li>
                  <li><a href="ModifyRides.php" class="link-dark rounded">Modify Rides</a></li>'; ?>
          </ul>
        </div></ul>

        <ul><button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#events-collapse" aria-expanded="false">
        Events
        </button>
        <div class="collapse" id="events-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="ViewEvents.php" class="link-dark rounded">View Events</a></li>
            <?php //must be logged in to add or modify attractions
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true)
              echo '<li><a href="NewEventForm.php" class="link-dark rounded">Add Events</a></li>
              <li><a href="ModifyEvents.php" class="link-dark rounded">Modify Events</a></li>';
            ?>
          </ul>
        </div>
        </ul>
      </div>
    </li>

    <li class="mb-1">
      <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
        Maintenance
      </button>
      <div class="collapse" id="orders-collapse">
        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
          <?php
          if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            ;
          }else{
            echo"<li><a href='repair.php' class='link-dark rounded'>New</a></li>";
          }
           ?>
          <li><a href="repair_processing.php" class="link-dark rounded">Processing</a></li>
          <li><a href="repair_finished.php" class="link-dark rounded">Finished</a></li>
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
          <?php
          if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            echo "<li><a href='login.php' class='link-dark rounded'>Login</a></li>
            <li><a href='sign-up.php' class='link-dark rounded'>Create Account</a></li>";
          }else{
            echo"<li><a href='welcome.php' class='link-dark rounded'>Profile</a></li>
            <li><a href='Display_Notifications.php' class='link-dark rounded'>Notification</a></li>
            <li><a href='logout.php' class='link-dark rounded'>Sign out</a></li>";
          }

           ?>
          <?php
          if (isset($_SESSION["useruid"])){
            echo '<li><a href="login.php" class="link-dark rounded">Success</a></li>';
          }
           ?>


        </ul>
      </div>
    </li>
  </ul>
  <img src="includes/pony.png" id="pony"/>
</div>
