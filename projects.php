<?php

use App\Models\Project;

function printProjects()
{
    $projects = Project::all();
    foreach ($projects as $project) {
        echo "<h3>{$project->title}</h3>";
        echo "<h4>{$project->description}</h4>";
        echo "<h4>{$project->projectRole}</h4>";
        echo "<br>";
    }
}
