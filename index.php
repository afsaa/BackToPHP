<?php
include("jobs.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repaso PHP</title>
</head>

<body>
    <div>
        <h1>Andrés Saa</h1>
        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum incidunt ipsam ullam est ipsum autem.</h3>
    </div>
    <div>
        <h2>Skills and Roles</h2>
        <?php
        foreach ($jobs as $job) {
            if ($job->visible === true) {
                echo "<h3>{$job->getTittle()}</h3>";
                echo "<h4>{$job->getDescription()}</h4>";
            }
        }
        ?>
    </div>
</body>

</html>