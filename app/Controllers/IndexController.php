<?php

namespace App\Controllers;

use App\Models\{Job, Project};

class IndexController extends BaseController
{
    public function indexAction()
    {
        $jobs = Job::all();
        $projects = Project::all();

        return $this->renderHTML('index.twig', [
            'jobs' => $jobs,
            'projects' => $projects
        ]);
    }
}
