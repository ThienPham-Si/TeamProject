<?php

include_once 'header.php';
include('includes/dbh.inc.php');
echo('<div id = "content" class = "content">');

$db = $conn;
$tableName = "hotels";
$columns = ['hotel_id', 'hotel_name', 'location_num','supervisor','sales_per_month','expense_per_month','is_deleted'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns)
{
	if(empty($db)){$msg = "Database connection error";}
	elseif(empty($columns) || !is_array($columns)){$msg = "column names must be defined in an indexed array";}
	elseif(empty($tableName)){$msg = "Table Name is empty";}
	else
	{
		$columnName = implode(", ", $columns);
		$query = "SELECT " . $columnName . " FROM $tableName WHERE is_deleted = false";
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
				$msg = "No Data Found";
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
