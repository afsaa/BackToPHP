<?php
// Objetos
class Job
{
    public $tittle;
    public $description;
    public $visible = true;
}

$job1 = new Job();
$job1->tittle = "Webview Developer";
$job1->description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore odit voluptas maxime cumque neque nemo officia ratione a. Soluta ducimus eum dolores et fugiat labore nulla, dolor itaque cum error?";
$job1->visible = false;

$job2 = new Job();
$job2->tittle = "React Developer";
$job2->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, eaque recusandae quae deleniti eum sunt?";

$job3 = new Job();
$job3->tittle = "Frontend Developer";
$job3->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum dignissimos aut quod ex numquam in aspernatur, cupiditate autem pariatur labore sint rem reprehenderit animi provident.";

$jobs = [
    $job1,
    $job2,
    $job3
];
