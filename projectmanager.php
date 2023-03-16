<?php
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'project_manager');
define('DB_PASSWORD', 'Bailey1967!!');
define('DB_NAME', 'project_tracker');

$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
?>


<form action="" method="post">
    <?php
    $query = " select * from agedata";
    $result = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <label for="">Name</label>
        <input type="text" value="<?php echo $row['Username'];?>">
        <
    <?php
    }
    ?>
</form>