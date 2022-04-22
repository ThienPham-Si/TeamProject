
<?php
    include('includes/dbh.inc.php');


    $db = $conn;
    $tableName = "Notifications";
    $columns = ['employee_to_notify','table_to_check','checked','notification_number','is_deleted','sn','event_or_maintenance_number','description'];
    $fetchData = fetch_data($db, $tableName, $columns);

    function fetch_data($db, $tableName, $columns)
    {
        if(empty($db)){$msg = "Database connection error";}
        elseif (empty($columns) || !is_array($columns)){$msg = "column names must be defined in an indexed array";}
        elseif(empty($tableName)){$msg= "Table Name is empty";}
        else
        {
            $columnName = implode(", ", $columns);
            $query = "SELECT " . $columnName . " FROM $tableName ";
            $result = $db -> query($query);

            if($result == true)
            {
                if($result -> num_rows > 0)
                {
                    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    $msg = $row;
                }
                else
                {
                    $msg = "No new notifications";
                }
            }
            else
            {
                $msg = mysqli_error($db);
            }
        }
        return $msg;
    }

?>
