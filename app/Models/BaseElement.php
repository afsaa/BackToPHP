<?php

namespace App\Models;

class BaseElement
{
    protected $title;
    protected $description;
    public $visible = true;

    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
