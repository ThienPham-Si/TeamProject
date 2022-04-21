<?php 
  require_once "header.php";
  require_once "includes/dbh.inc.php";
?>

<div id="content" class="content">
    <section>
        <h2> MONTHLY REPORTS </h2>
    <!DOCTYPE html>
    <html>
        <body>
        <form action="" method="POST">
            <input type="date" name="one" min=' . date("Y-m-d") . 'required>
            <br>
            <input type="date" name="two" min=' . date("Y-m-d") . 'required>
            <br>
            <label for="option">Choose an option:</label>
                <select name="option" id="option">
                    <option value="Customers">Customers</option>
                    <option value="Broken Rides">Broken Rides</option>
                    <option value="Popular Rides">Popular Rides</option>
                    <option value="Rainouts">Rainouts</option>
                </select>
                <input type="submit" name="optionSubmitted">
        </form>
    <?php
        echo("
            <div class='table-wrap'>
            <table class='table table-striped table-hover table-responsive'>
            
        ");

        if(isset($_POST['optionSubmitted'])){
            $option = $_POST['option'];
            $one = $_POST['one'];
            $two = $_POST['two'];
        switch($option){
            case "Customers":
                //$query = "SELECT count(id) FROM customers"
                /*$query = "SELECT COUNT(pass_id)
                FROM tickets
                WHERE check_in=TRUE
                date_check_in >= '$one'
                AND date_check_in <= '$two'";
                $result = mysqli_query($conn, $query);
                while($row = $result->fetch_assoc())
                {
                    echo('tr class="tableData">' . $row['date_check_in'] . '</td');
                    echo('tr class="tableData">' . $row['date_check_in'] . '</td');                        
                }*/
                break;
            case "Broken Rides": 
                //total number of broken rides
                $count = "SELECT COUNT(id)
                FROM maintaince_tickets
                WHERE date_opened >= '$one' AND date_closed <= '$two' AND attraction_type = 'ride' ";                

                $result = mysqli_query($conn, $count);
                echo "<tr><th class='tableHeader'>Total Number of Broken Rides</th></tr>";
                while($row = mysqli_fetch_assoc($result))
                {
                    echo('<tr>');
                    echo('<td class="tableData">' . $row['COUNT(id)'] . '</td>');
                    echo('</tr>');
                }
                //list of broken rides
                $query = "SELECT ride_id, ticket_discription
                FROM maintaince_tickets
                WHERE date_opened >= '$one' AND date_closed <= '$two' AND attraction_type = 'ride' ";
                $result = mysqli_query($conn, $query);
                echo "<tr><th class='tableHeader'>Ride ID</th>
                    <th class='tableHeader'>Description</th></tr>";
                while($row = mysqli_fetch_assoc($result))
                {
                    echo('<tr>');
                    echo('<td class="tableData">' . $row['ride_id'] . '</td>');
                    echo('<td class="tableData">' . $row['ticket_discription'] . '</td>');
                    echo('</tr>');
                }
                break;
            case "Popular Rides":
                $query = "SELECT ride_name, times_ran
                FROM rides, ride_stats
                WHERE month_year <= '$two' AND rides.ride_id = ride_stats.ride_id
                GROUP BY rides.ride_id
                ORDER BY times_ran DESC
                LIMIT 3";
                $result = mysqli_query($conn, $query);
                echo "<tr><th class='tableHeader'>Ride Name</th>
                <th class='tableHeader'>Number of Times Ran</th></tr>";
                while($row = mysqli_fetch_assoc($result))
                {
                    echo('<tr>');
                    echo('<td class="tableData">' . $row['ride_name'] . '</td>');
                    echo('<td class="tableData">' . $row['times_ran'] . '</td>');
                    echo('</tr>');
                }
                 break;
            case "Rainouts": 
                //total number rainouts
                $count = "SELECT COUNT(date_of_rainout)
                FROM rainouts
                WHERE date_of_rainout <= '$two' AND date_of_rainout >= '$one'";
                

                $result = mysqli_query($conn, $count);
                echo "<tr><th class='tableHeader'>Total Number of Rainouts</th></tr>";
                while($row = mysqli_fetch_assoc($result))
                {
                    echo('<tr>');
                    echo('<td class="tableData">' . $row['COUNT(date_of_rainout)'] . '</td>');
                    echo('</tr>');
                }
                //list of rainouts
                $query = "SELECT date_of_rainout, number_of_closed_rides
                FROM rainouts
                WHERE date_of_rainout <= '$two' AND date_of_rainout >= '$one'";
                $result = mysqli_query($conn, $query);
                echo "<tr><th class='tableHeader'>Date Of Rainout</th>
                    <th class='tableHeader'>Number of Rides Closed</th></tr>";
                while($row = mysqli_fetch_array($result))
                {
                    echo('<tr>');
                    echo('<td class="tableData">' . $row['date_of_rainout'] . '</td>');
                    echo('<td class="tableData">' . $row['number_of_closed_rides'] . '</td>');
                    echo('</tr>');
                }

                break;
            }
        }
    ?>
        

<?php
    include 'footer.php';
?>