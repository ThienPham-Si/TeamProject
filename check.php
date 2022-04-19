<?php 
    //make sure its ok to delete
    //otherwise, redirect elsewhere
    //what can "it" be? locations, employees, rides, events and more
    //depends on all of the places its a foreign key in
    $canDelete = false;
    if($tableName == "locations") {
      $eventQuery = "SELECT event_name
                    from Theme_Park_Database.park_events 
                    where Theme_Park_Database.park_events.location = $id";

      $rideQuery = "SELECT ride_name
      from Theme_Park_Database.rides, Theme_Park_Database.locations
      where Theme_Park_Database.locations.location_id = $id
      and Theme_Park_Database.rides.location = Theme_Park_Database.locations.location";

      if ( ($eventQueryResult = mysqli_query($conn, $eventQuery)) 
      && ($rideQueryResult = mysqli_query($conn, $rideQuery))) {
        if(!($eventRow=mysqli_fetch_array($eventQueryResult)) 
        && !($rideRow=mysqli_fetch_array($rideQueryResult))) {
          $canDelete = true;
        } else {
          include_once "header.php";
          echo('<div id="content" class="content">
          <section>');

          $locNameQuery = "SELECT location 
                          FROM Theme_Park_Database.locations 
                          where Theme_Park_Database.locations.location_id=$id";
          if($locQueryResult = mysqli_query($conn, $locNameQuery)) {
            $locName = mysqli_fetch_array($locQueryResult);
            echo '<h3>Can\'t delete location: ' . $locName['location'] . '</h3>';
          }

          if($eventRow) {
            echo('<h3>Modify event locations or delete these events:');
            echo('<ul>' . $eventRow['event_name'] . '</ul>');
            while($eventRow=mysqli_fetch_array($eventQueryResult))
              echo('<ul>' . $eventRow['event_name'] . '</ul>');
            echo '</h3>';
          }

          if(!isset($rideRow))
            $rideRow=mysqli_fetch_array($rideQueryResult);
          if(isset($rideRow)) {
            echo('<h3>Modify ride locations or delete these rides:');
            echo('<ul>' . $rideRow['ride_name'] . '</ul>');
            while($rideRow=mysqli_fetch_array($rideQueryResult))
              echo('<ul>' . $rideRow['ride_name'] . '</ul>');
            echo(' </h3>');
          }
          echo('</section></div>');
          include_once "footer.php";
          exit;
        }
      }
    }

    if($tableName=="employees") {
      //get employee role - if its a coordinator then don't delete
      $emplQuery = "SELECT first_name, m_name, last_name, employee_role
                    from Theme_Park_Database.employees
                    where Theme_Park_Database.employees.employee_id=$id";
      if ($emplQueryResult = mysqli_query($conn, $emplQuery)) {
        if($fetchEmployee=mysqli_fetch_array($emplQueryResult)) {
          if($fetchEmployee['employee_role'] == "Event Coordinator") {
            $eventQuery = "SELECT event_name
            from Theme_Park_Database.park_events 
            where Theme_Park_Database.park_events.event_coordinator = $id";
            if ($eventQueryResult = mysqli_query($conn, $eventQuery))
              if(!($eventRow=mysqli_fetch_array($eventQueryResult)))
                $canDelete = true;
              else {
                include_once "header.php";
                echo('<div id="content" class="content">
                <section>');         
                if($eventRow) {
                  echo('<h3>Modify event coordinators or delete these events:');
                  echo('<ul>' . $eventRow['event_name'] . '</ul>');
                  while($eventRow=mysqli_fetch_array($eventQueryResult))
                    echo('<ul>' . $eventRow['event_name'] . '</ul>');
                  echo '</h3>';
                }
                echo('</section></div>');
                include_once "footer.php";
                exit;
              }
            else 
              exit;
          } else 
            $canDelete = true;
        }
      }
    }
?>