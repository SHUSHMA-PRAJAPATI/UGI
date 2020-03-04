<?php
	include "../../database.php";
	$designation = $_POST['designation'];
    $level_no = $_POST['level_no'];
	
	$sql = "INSERT INTO designation (designation,level_no) VALUES('$designation','$level_no')";
	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Inserted';
	}

	header("Location:addDesignation.php");
	$con->close();
?>
