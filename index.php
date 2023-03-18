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
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="style.php" media="screen">
        <script src="main.js" defer></script>
        <title>Time Tracker</title>
    </head>
    <main>
        <div class="container">
            <h2 class="display-4 col-12 text-center">Project Tracker</h2>
            <div class="row">
                <!-- Input -->
                <div class="">
                    <form class="" method="post" action="newproject.php">
                        <!--Name  -->
                        <label for="project-name">Name</label>
                        <input type="text" id="project_name" name="project-name" required>
                        <!-- Contact -->
                        <label for="contact">Contact</label>
                        <input type="text" id="contact" name="contact" required>
                        <!-- Email -->
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                        <!-- Phone -->
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" required>
                        <!-- Project Type -->
                        <label for="type">Project Type</label>
                        <select name="project_type" id="type" required>
                            <option value="web">Web Development</option>
                            <option value="design">Web Design</option>
                            <option value="WordPress">WordPress</option>
                            <option value="UI">UI</option>
                        </select>
                        <?php
                        if (isset($_GET['error']) && $_GET['error'] == 'duplicate') {
                            echo "<p class='error-message'>This project already exists.</p>";
                        }
                        ?>

                        <input type="submit" name="Submit" id="submit" value="Add New Project">
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
                    <table class="project-summary">
                        <h2 class='h1 text-center'>Project List</h2>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Project Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td class=""><?php echo $row['projectname']; ?></td>
                                    <td class=""><?php echo $row['contact_name']; ?></td>
                                    <td class=""><?php echo $row['contact_email']; ?></td>
                                    <td class=""><?php echo $row['contact_phone']; ?></td>
                                    <td class=""><?php echo $row['project_type']; ?></td>
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
    <footer class="container text-center mt-5">
        <p>Version Happy Taco 6.0</p>
    </footer>

    <body>
    </body>

    </html>