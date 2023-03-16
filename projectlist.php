<?php

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'project_manager');
define('DB_PASSWORD', 'Bailey1967!!');
define('DB_NAME', 'project_tracker');


$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($link === false) {
    die("No Connection Found") . mysqli_connect_error();
}


$sql = "SELECT * FROM projectname";
if($result = mysqli_query($link, $sql)) {
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
        }
    }
}








// $con = mysqli_connect('localhost:3306', 'project_manager', 'Bailey1967!!','project_tracker');









$conn->close();
?>