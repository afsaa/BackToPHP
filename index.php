<?php
require "jobs.php";
require "projects.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Repaso PHP</title>
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Andrés Saa</h1>
            <h3 class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum incidunt ipsam ullam est ipsum autem.</h3>
        </div>
    </div>
    <div class="container-fluid row">
        <div class="col-md-8">
            <h2 class="text-center">Jobs</h2>
            <?php
            printJobs();
            ?>
        </div>
        <div class="col-md-4">
            <h2 class="text-center">Skills</h2>
            <h3>HTML5</h3>
            <h3>CSS3</h3>
            <h3>JavaScript</h3>
        </div>
    </div>
    <div class="container-fluid">
        <h2 class="text-center">Projects</h2>
        <?php
        printProjects();
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>