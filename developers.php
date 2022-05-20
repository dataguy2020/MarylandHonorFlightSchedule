<?php
	include ("includes/database.php")
	
	$db = $conn;
	$tableName="schedule"
	$columns=['',''];
	$fetchData = fetch_data($db, $tableName, $columns);
	
	function fetch_data($db,$tableName, $columns) {
		if (empty($db)) {
			$msg="Database connection error";
		}
		elseif (empty($columns) || !is_array($columns)) {
			$msg="Columns name must be defined in an indexed array";
		}
		elseif (empty($tableName)) {
			$msg="Table name is empty"
		}
		else {
			$columnName = implode(",", $columns);
			$query = "SELECT " . $columnName." FROM $tableName"."ORDER BY id DESC";
			$result=$db->query($query);
			
			if ($reseult == true) {
				if ($result->num_rows > 0) {
					$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
					$msg=$row;
				}
				else {
					$msg="No Data Found";
				}
				else {
					$msg=mysqli_error($db);
				}
			}
			return $msg;
		}
		?>
		
