        <?php

        $conn = mysqli_connect('localhost:3306', 'project_manager', 'Bailey1967!!', 'project_tracker');


        $sql = "SELECT * FROM project_manager;";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
          echo "Project Name:" . $row['projectname \n'];
        }


        $conn->close();
        ?>