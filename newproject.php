<?php

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost:3306', 'project_manager', 'Bailey1967!!','project_tracker');

// get the post records
$projectname = $_POST['project-name'];


// database insert SQL code
$sql = "INSERT INTO `project_manager` (`projectname`) VALUES ('$projectname')";

// insert in database
$rs = mysqli_query($con, $sql);

if($rs)
{
	// echo "Project Added";
	header("Refresh:0; url=indexphp");
}
