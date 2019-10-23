<?php

use App\Models\Job;

require_once "vendor/autoload.php";

$job1 = new Job("Webview Developer", "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore odit voluptas maxime cumque neque nemo officia ratione a. Soluta ducimus eum dolores et fugiat labore nulla, dolor itaque cum error?");
$job1->visible = false;

$job2 = new Job("React Developer", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, eaque recusandae quae deleniti eum sunt?");

$job3 = new Job("Frontend Developer", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum dignissimos aut quod ex numquam in aspernatur, cupiditate autem pariatur labore sint rem reprehenderit animi provident.");

$jobs = [
    $job1,
    $job2,
    $job3
];
