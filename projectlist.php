<?php

// $servername = "localhost:3306";
// $username = "project_manager";
// $password = "Bailey1967!!";
// $dbname = "project_tracker";

// Create connection
$con = mysqli_connect('localhost:3306', 'project_manager', 'Bailey1967!!', 'project_tracker');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT projectname FROM project_manager";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["projectname"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>