<?php
// database connection code
$con = mysqli_connect('localhost:3306', 'project_manager', 'Bailey1967!!','project_tracker');

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Check if the form is submitted
if(isset($_POST['Submit'])) {
    // Get the form data
    $projectname = $_POST['project-name'];
    $contact_name = $_POST['contact'];
    $contact_email = $_POST['email'];
    $contact_phone = $_POST['phone'];
    $project_type = $_POST['type'];

    // Escape special characters to prevent SQL injection
    $projectname = mysqli_real_escape_string($con, $projectname);
    $contact_name = mysqli_real_escape_string($con, $contact_name);
    $contact_email = mysqli_real_escape_string($con, $contact_email);
    $contact_phone = mysqli_real_escape_string($con, $contact_phone);
    $project_type = mysqli_real_escape_string($con, $project_type);

    // database insert SQL code
    $sql = "INSERT INTO `project_manager` (`projectname`, `contact_name`, `contact_email`, `contact_phone`, `project_type`)
            VALUES ('$projectname', '$contact_name', '$contact_email', '$contact_phone', '$project_type')";

    // insert in database
    $rs = mysqli_query($con, $sql);

    if($rs) {
        header("Refresh:0; url=index.php");
        // echo "Project Added";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);
