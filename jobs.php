<?php

use App\Models\Job;

function printJobs()
{
    $jobs = Job::all();
    foreach ($jobs as $job) {
        echo "<h3>{$job->title}</h3>";
        echo "<h4>{$job->description}</h4>";
        echo "<br><hr>";
    }
}
