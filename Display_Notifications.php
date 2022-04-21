
<?php
    include('Notifications.php');
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="conatainer">
    <div class="row">
        <div class = "col-sm-12">
        <?php echo $deleteMsg??'';?>
        <div class = "table-responsive">
            <table id ="tableName" class = "table table-striped">

            <th>Employee ID</th>
            <th>Modification Location</th>
            <th>Toggle Checked</th>
            <th>Notification Number</th>
        </thead>
        <tbody>
        <?php
            if(is_array($fetchData))
            {
                $sn = 1;
                foreach($fetchData as $data)
                {
                    if($data['checked'] == 0 && $data['is_deleted'] == 0){
                        ?>
                    <tr>
                    <td><?php echo $data['employee_to_notify']??''?></td>
                    <td><?php echo $data['table_to_check']??''?></td>
                    <?php echo '<form action ="" method="POST">'?>
                    <?php echo '<input type = "hidden" name = "checkbox[]" value = "false" id = "checkbox">'?>
                    <td><?php echo  '<input type = "checkbox" name="checkbox[]" value="true" id="checkbox">'?></td>
                    <td><?php echo $data['notification_number']??''?></td>

                    <?php
                    $query = "UPDATE Notifications SET sn = $sn WHERE notification_number = ". $data['notification_number'];
                    $result = $conn -> query($query);

                    $sn++;
                    }
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
            <button id = "subButton">
                <td valign = "bottom" align = "right">
                <input type = "submit" name = "update" value = "CONFIRM"/>
            </button>
                </tr>
                </tfoot>
            </table>

            </div>
        </div>
    </div>
</div>

</body>
</html>


<?php
if(isset($_POST['update']))
{
    $checked_array = $_POST['checkbox'];
    $query = "SELECT COUNT('checked') AS Num_Not_Checked FROM Notifications WHERE checked = 0";
    $result = $conn -> query($query);

    $row = mysqli_fetch_array($result);
    $num_not_checked = $row['Num_Not_Checked'];
    $i = 0 /* - $num_not_checked*/ ;
    foreach($checked_array as $check)
    {
       if($check == 'true')
        {
            $query = "UPDATE Theme_Park_Database.Notifications SET checked = true WHERE sn = $i";
            $result = $conn -> query($query);
            if($result == false)
            {
                echo '<script> alert("Update failed") </script>';
            }
            else
            {
                //echo '<script> alert("Update made")</script>';
            }

        }
        $i++;

    }
}
?>
