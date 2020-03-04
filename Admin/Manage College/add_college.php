<?php
	include ("../../database.php");

	$college_code = $_POST['college_code'];
	$college_name = $_POST['college_name'];
	$college_alias = $_POST['college_alias'];
	$is_active = $_POST['is_active'];

	$sql = "INSERT INTO college (college_code,college_name,college_alias,is_active) VALUES('$college_code','$college_name','$college_alias','$is_active')";
	// echo $sql;
	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Inserted';
	}

	header("Location:addCollege.php");
	$con->close();

?>