<?php

namespace App\Models;

require_once "BaseElement.php";

class Project extends BaseElement
{
    private $projectRole;

    function __construct($title, $description, $projectRole)
    {
        parent::__construct($title, $description);
        $this->projectRole = $projectRole;
    }

    public function getProjectRole()
    {
        return $this->projectRole;
    }
}
