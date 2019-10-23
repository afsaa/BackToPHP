<?php

use App\Models\Project;

require_once "vendor/autoload.php";

$project1 = new Project("Web App", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore odit voluptas maxime cumque neque nemo officia ratione a. Soluta ducimus eum dolores et fugiat labore nulla, dolor itaque cum error?", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, totam!");
$project2 = new Project("IOS App", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore odit voluptas maxime cumque neque nemo officia ratione a. Soluta ducimus eum dolores et fugiat labore nulla, dolor itaque cum error?", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, totam!");

$projects = [
    $project1,
    $project2
];
