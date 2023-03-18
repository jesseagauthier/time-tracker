    <?php
    $conn = mysqli_connect('localhost:3306', 'project_manager', 'Bailey1967!!', 'project_tracker');
    $sql = "SELECT * FROM project_manager;";
    $result = mysqli_query($conn, $sql);
    $numberofrows = mysqli_num_rows($result);
    ?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="style.php" media="screen">
        <script src="main.js" defer></script>
        <title>Time Tracker</title>
    </head>
    <main>
        <div class="container">
            <h2 class="display-4 col-12 text-center"> Gauthier Studios - Project Tracker</h2>
            <div class="row">
                <!-- Input -->
                <div class="col-11 offset-1 text-center bg-primary m-1">
                    <form class="my-4 align-self-center" method="post" action="newproject.php">
                        <input type="text" id="project_name" name="project-name" required>
                        <input type="submit" name="Submit" id="submit" value="New Project">
                    </form>
                </div>
                <!-- OutPut -->
                <div class="">
                    <?php
                    // Connect to database
                    $conn = mysqli_connect('localhost:3306', 'project_manager', 'Bailey1967!!', 'project_tracker');

                    // Retrieve data from database
                    $sql = "SELECT * FROM project_manager;";
                    $result = mysqli_query($conn, $sql);
                    ?>

                    <!-- Generate HTML table -->
                    <table>
                        <h2 class='h1 text-center'>Project List</h2>
                        <thead>
                            <tr>
                                <th class="my-1">Project Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $row['projectname']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <?php
                    // Close database connection
                    mysqli_close($conn);
                    ?>

                </div>
            </div>
    </main>
    <footer class="container text-center">
        <p>Version Happy Taco24t</p>
    </footer>

    <body>
    </body>

    </html>