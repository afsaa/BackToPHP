<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    /*function __construct($title, $description, $projectRole)
    {
        parent::__construct($title, $description);
        $this->projectRole = $projectRole;
    }

    public function getProjectRole()
    {
        return $this->projectRole;
    }*/
}
