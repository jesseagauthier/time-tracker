<?php
$conn = mysqli_connect('localhost:3306', 'project_manager', 'Bailey1967!!','project_tracker');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM project_manager";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["projectname"];
  }
} else {
  echo "0 results";
}
$conn->close();
