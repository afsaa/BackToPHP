<?php
var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add Job</title>
</head>

<body>
    <form action="addJob.php" method="post">
        <label for="title">Title: </label>
        <input type="text" name="title">
        <br>
        <label for="description">Description: </label>
        <input type="text" name="description">
        <br>
        <button type="submit">Save</button>
    </form>
</body>

</html>