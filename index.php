<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <script src="main.js" defer></script>
    <title>Time Tracker</title>
</head>
<main>
    <div>
        <h2>Project Time Tracker - Latest Version</h2>
        <div class="registration">
            <form class="" method="post" action="newproject.php">
                <label for="project-name">New Project</label>
                <input type="text" id="project_name" name="project-name" required>
                <input type="submit" name="Submit" id="Submit" value="Submit">
            </form>
        </div>
        <?php include 'project_manager.php';?>
    </div>
</main>

<body>
</body>

</html>