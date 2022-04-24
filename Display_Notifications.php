
<?php
    include_once 'header.php';
    include('Notifications.php');
?>

<div id="content" class="content">
    <div class="row">
        <div class = "col-sm-12">
        <?php echo $deleteMsg??'';?>
        <div class = "table-responsive">
            <table id ="tableName" class = "table table-striped">

            <th>Employee ID</th>
            <th>Description</th>
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
                        if($data['table_to_check'] == 'maintaince_tickets')
                        {
                            $description = 'Maintenance ticket '. $data['event_or_maintenance_number'] .' updated: ' . $data['description'];
                        }
                        else
                        {
                            $description = 'Event ' . $data['event_or_maintenance_number'] . ' updated: ' . $data['description'];
                        }
                    ?>
                    <tr>
                    <td><?php echo $data['employee_to_notify']??''?></td>
                    <td><?php echo $description;?></td>
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
            <form action = '' method = 'POST'>
            <td valign = "bottom" align = "left">
            <button id = "subButton">
                <input type = "submit" name = "update" value = "Clear Notifications">
            </button>
            </form>
                </tr>
                </tfoot>
            </table>

            </div>
        </div>
    </div>
</div>

<?php
if(isset($_POST['update']))
{
    $query = "UPDATE Theme_Park_Database.Notifications SET checked = 1 WHERE notification_number != 0";
    $result = $conn -> query($query);
    if($result == true)
    {
        echo "<meta http-equiv='refresh' content = '0'>";
        //echo '<script> alert("Notifications cleared")</script>';
    }
    else
    {
        //echo '<script> alert("Error clearing notifications")</script>';
    }
}


include_once 'footer.php';

?>
