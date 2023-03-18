// Get the form data
$projectname = $_POST['project-name'];
$contact_name = $_POST['contact'];
$contact_email = $_POST['email'];
$contact_phone = $_POST['phone'];
$project_type = $_POST['project_type'];

// Escape special characters to prevent SQL injection
$projectname = mysqli_real_escape_string($con, $projectname);
$contact_name = mysqli_real_escape_string($con, $contact_name);
$contact_email = mysqli_real_escape_string($con, $contact_email);
$contact_phone = mysqli_real_escape_string($con, $contact_phone);
$project_type = mysqli_real_escape_string($con, $project_type);

// Check if the project already exists in the database
$sql = "SELECT * FROM `project_manager` WHERE `projectname` = '$projectname' AND `contact_email` = '$contact_email'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0) {
// If the project already exists, prevent the submission
echo "This project already exists in the database.";
} else {
// If the project doesn't exist, insert it into the database
$insert_sql = "INSERT INTO `project_manager` (`projectname`, `contact_name`, `contact_email`, `contact_phone`, `project_type`)
VALUES ('$projectname', '$contact_name', '$contact_email', '$contact_phone', '$project_type')";

$insert_result = mysqli_query($con, $insert_sql);

if($insert_result) {
echo "Project added successfully.";
} else {
echo "Error adding project: " . mysqli_error($con);
}
}