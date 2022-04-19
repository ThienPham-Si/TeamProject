
<?php
  include_once "header.php";
  include_once "Notifications.php";
?>


  <div id="content" class="content">
      <div class="row">
        <div class = "col-sm-12">
        <?php echo $deleteMsg??'';?>
        <div class = "table-responsive">
            <table id ="tableName" class = "table table-striped">
            <thead><tr><th>S.N</th>

            <th>Employee ID</th>
            <th>Modification Location</th>
            <th>Checked? (0 = no, 1 = yes)</th>
            <td>Toggle Checked</th>
            <th>Notification Number</th>
            <th>Is Deleted</th>
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
                    <td><?php echo $data['employee_to_notify']??''?></td>
                    <td><?php echo $data['table_to_check']??''?></td>
                    <td><?php echo $data['checked']??''?></td>
                    <?php echo '<form action ="" method="POST">'?>
                    <?php echo '<input type = "hidden" name = "checkbox[]" value = "false" id = "checkbox">'?>
                    <td><?php echo  '<input type = "checkbox" name="checkbox[]" value="true" id="checkbox">'?></td>
                    <td><?php echo $data['notification_number']??''?></td>
                    <td><?php echo $data['is_deleted']??''?></td>
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


<?php
include_once 'footer.php';

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
if(isset($_POST['update']))
{
    $checked_array = $_POST['checkbox'];

    for($i = 0; $i < $sn; $i++)
    {
        //echo $checked_array[$i];
        if($checked_array[$i] == true)
        {
            //echo "in if statement, i = " . $i;
            $query = "UPDATE Theme_Park_Database.Notifications SET checked = true WHERE notification_number = " .$i;
            $query_run = mysqli_query($conn,$query);
        }
    }


}
?>
