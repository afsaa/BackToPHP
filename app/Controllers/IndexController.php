<?php

namespace App\Controllers;

use App\Models\{Job, Project};

class IndexController
{
    public function indexAction()
    {
        $jobs = Job::all();
        $projects = Project::all();

        include '../views/index.php';
    }
}
