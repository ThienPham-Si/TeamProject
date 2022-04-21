<?php
	include('Hotels.php');




    if(isset($_POST['reserve']))
    {

        $C_id = mysqli_real_escape_string($db,$_POST['c_id']);
        $full_room_descrip = mysqli_real_escape_string($db, $_POST["Room"]);
        $hotel_id = $full_room_descrip[0];
        $room_num = $full_room_descrip[6];
        if($full_room_descrip[7] != ' ')
        {
            $room_num = ($room_num * 10) + $full_room_descrip[7];
            if($full_room_descrip[13] == 'd'){$room_type = "double";}
            else{$room_type = "single";}
        }
        else
        {
            if($full_room_descrip[12] == 'd'){$room_type = "double";}
            else{$room_type = "single";}
        }
        $hotel_int = intval($hotel_id);
        $room_int = intval($room_num);
        $customer_int = intval($C_id);

        $query2 = "UPDATE Theme_Park_Database.hotel_rooms SET occupied = 1, customer_id =  $customer_int  WHERE hotel_id =  $hotel_int  AND room_num =  $room_int";
        $result2 = $conn -> query($query2);
        if($result2 == true)
        {
            echo '<script> alert ("Room reservation made")</script>';
        }
        else
        {
            echo '<script> alert ("Room reservation failed")</script>';
        }

    }

        if(isset($_POST['CheckOut']))
    {

        $full_room_descrip = mysqli_real_escape_string($db, $_POST["Check"]);
         $hotel_id = $full_room_descrip[0];
        $room_num = $full_room_descrip[6];
        if($full_room_descrip[7] != ' ')
        {
            $room_num = ($room_num * 10) + $full_room_descrip[7];
        }

        $room_int = intval($room_num);
        $hotel_int = intval($hotel_id);
        $query3 = "UPDATE Theme_Park_Database.hotel_rooms SET occupied = 0, customer_id =  0  WHERE hotel_id =  $hotel_int  AND room_num =  $room_int";
        $result3 = $conn -> query($query3);
        if($result3 == true)
        {
            echo '<script> alert ("Customer successfully checked out")</script>';
        }
        else
        {
            echo '<script> alert ("Error with check out")</script>';
        }

    }


?>

<!DOCTYPE html>
<html>
<head>
    <form method = "POST">
        <label>Customer Identification Number:</label>
        <input type="number" name = "c_id" required><br>
        <label>Select an Available Room</label>
        <select name = "Room">
            <?php

                $query = "SELECT hotel_id, room_num, room_type FROM hotel_rooms WHERE occupied = 0 and need_cleaning = 0 and is_deleted = 0";
                $result = $conn -> query($query);
                while($row = mysqli_fetch_array($result)):;
                    $hotel = $row['hotel_id'];
                    $room_num = $row["room_num"];
                    $room_type = $row['room_type'];?>
                    <option value = "<?php echo "$hotel  |  $room_num  |  $room_type";?>">
                    <?php echo $hotel . " - " . $room_num . " - " . $room_type;
            ?>

            </option>
            <?php endwhile; ?>
        </select>
        <br>
        <input type = "submit" value = "Reserve" name = "reserve">
        </forms>
        <br>


        <form method = "POST">
        <label>Select the Room to Check Out</label>
        <select name = "Check">
            <?php

                $query = "SELECT hotel_id, room_num, room_type, customer_id FROM hotel_rooms WHERE occupied = 1 and is_deleted = 0";
                $result = $conn -> query($query);
                while($row = mysqli_fetch_array($result)):;
                    $hotel = $row['hotel_id'];
                    $room_num = $row["room_num"];
                    $room_type = $row['room_type'];
                    $customer_id = $row['customer_id']?>
                    <option value = "<?php echo "$hotel  |  $room_num  |  $room_type  |  $customer_id";?>">
                    <?php echo $hotel . " - " . $room_num . " - " . $room_type . " - " . $customer_id;
            ?>

            </option>
            <?php endwhile; ?>
        </select>
        <br>
        <input type = "submit" value = "Check Out" name = "CheckOut">
        </forms>
        <br>
</body>
</html>
</head>


<body>
<div class = "container">
	<div class = "row">
	<div class = "col-sm-12">
	<?php echo $deleteMsg??'';?>
	        <div class = "table-responsive">
            <table id ="tableName" class = "table table-striped">
            <thead><tr><th>S.N</th>
            <th>Hotel ID</th>
            <th>Name</th>
            <th>Location</th>
            <th>Rooms Available</th>
            <th>Manager</th>
            <th>AVG Monthly Sales</th>
            <th>AVG Monthly Expenses</th>
        </thead>
        <tbody>
        <?php
            if(is_array($fetchData))
            {
                $sn = 1;
                foreach($fetchData as $data)
                {

                        ?>
                    <tr>
                    <td><?php echo $sn; ?></td>
                    <td><?php echo $data['hotel_id']??''?></td>
                    <td><?php echo $data['hotel_name']??''?></td>
                    <td><?php echo $data['location_num']??''?></td>
                    <?php
                    $query = "SELECT SUM(occupied = 1) AS sum FROM hotel_rooms WHERE hotel_id = " . $data['hotel_id'];
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $rooms_oc = $row['sum'];
                    }

                    $query = "SELECT MAX(room_num) AS num_rooms FROM hotel_rooms WHERE hotel_id = " . $data['hotel_id'];
                    $result = mysqli_query($conn, $query);
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $tot_rooms = $row['num_rooms'];
                    }
                    $rooms_av = $tot_rooms - $rooms_oc;
                    ?>
                    <td><?php echo $rooms_av?></td>
                    <td><?php echo $data['supervisor']??''?></td>
                    <td><?php echo $data['sales_per_month']??''?></td>
                    <td><?php echo $data['expense_per_month']??''?></td>
                    </tr>
                    <?php

                    ?>
                    <?php
                    $sn++;
                }
            }
            else
            {
                ?>
                <tr>
                    <td colspan="8">
                <?php echo $fetchData; }?>
                </td>
                <tr>
            </tbody>
            <tfoot>
            <tr>
                </tr>
                </tfoot>
            </table>
            </div>
        </div>
    </div>
</div>



<?php mysqli_close($conn);?>
