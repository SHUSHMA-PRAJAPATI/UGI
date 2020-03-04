<?php
	include "../../database.php";
	$course_name = $_POST['course_name'];
    $course_alias = $_POST['course_alias'];
    $duration = $_POST['duration'];
    $total_semester = $_POST['total_semester'];
    $university = $_POST['university'];
    $is_active = $_POST['is_active'];


	// $college_name = $_POST['college_name'];
	// $query = "SELECT college_id FROM college where college_name='$college_name'";
	// $result = mysqli_query($con, $query);
	// $row = mysqli_fetch_assoc($result);
	// $college_id = $row['college_id'];	
	$sql = "INSERT INTO course(course_name,course_alias,duration,total_semester,university,is_active) VALUES('$course_name','$course_alias','$duration','$total_semester','$university','$is_active')";
	if(!mysqli_query($con,$sql))
	{
		echo 'Not inserted';
	}
	else
	{
		echo 'Inserted';
	}

	header("Location:addCourse.php");
	$con->close();
?>
