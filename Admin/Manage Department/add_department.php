<?php
	include "../../database.php";
	$department_alias = "";
	$department_name = "";
	$is_active = "";
	$edit_state = false;


	//save data
	if(isset($_POST['save'])){
	$department_alias = $_POST['department_alias'];
    $department_name = $_POST['department_name'];
	$is_active = $_POST['is_active'];
	// $college_name = $_POST['college_name'];
	// $query = "SELECT college_id FROM college where college_name='$college_name'";
	// $result = mysqli_query($con, $query);
	// $row = mysqli_fetch_assoc($result);
	// $college_id = $row['college_id'];	
	$sql = "INSERT INTO department (department_alias,department_name,is_active) VALUES('$department_alias','$department_name','$is_active')";
	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Inserted';
	}

	$_SESSION['msg'] = "Address saved";
	header("Location:addDepartment.php");
}

// update data
if(isset($_POST['update'])){
	$department_alias = mysql_real_escape_string($_POST['department_alias']);
	$department_name = mysql_real_escape_string($_POST['department_name']);
	$is_active = mysql_real_escape_string($_POST['is_active']);
	$department_id = mysql_real_escape_string($_POST['department_id']);
}

// $result = mysqli_query($con,"SELECT * FROM department");


	$con->close();
?>
