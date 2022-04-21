
<?php
    include('dining.php');
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
            <th>Restaurant ID</th>
            <th>Style</th>
            <th>Opens at</th>
            <th>Closes at</th>
            <th>locations</th>
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
                    <td><?php echo $data['id']??''?></td>
                    <td><?php echo $data['dining_type']??''?></td>
                    <td><?php echo $data['open_hour']??''?></td>
                    <td><?php echo $data['close_hour']??''?></td>
                    <td><?php echo $data['locations']??''?></td>
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
            </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>


<?php
