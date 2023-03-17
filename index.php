<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="style.php" media="screen">
    <script src="main.js" defer></script>
    <title>Time Tracker</title>
</head>
<main>
    <div class="container-fluid">
        <h2 class="col-12 text-center">Project Time Tracker</h2>
        <div class="row">
            <div class="col-6 text-center bg-primary p-2 m-3">
                <h3 class="text-white my-3 align-self-center">Add A Project</h3>
                <form class="my-4 align-self-center" method="post" action="newproject.php">
                    <input type="text" id="project_name" name="project-name" required>
                    <input type="submit" name="Submit" id="Submit" value="Submit">
                </form>
            </div>
            <div class=" list col-5 offset-1 text-center bg-primary p-2 m-3">
                <?php

                $conn = mysqli_connect('localhost:3306', 'project_manager', 'Bailey1967!!', 'project_tracker');
                $sql = "SELECT * FROM project_manager;";
                $result = mysqli_query($conn, $sql);
                $numberofrows = mysqli_num_rows($result);


                echo "<p> Active Projects: <p>" . "<p>" . $numberofrows . "</p>";
                echo "<h2> Project List </h2>" . "<br>";



                while ($row = mysqli_fetch_assoc($result)) {
                    $project_name = $row['projectname'];

                    echo "<p>" .  $project_name . "</p>" . "<br>";
                }


                $conn->close();
                ?>
            </div>
        </div>
</main>
<!-- <footer><p>Version .02</p></footer> -->

<body>
</body>

</html>