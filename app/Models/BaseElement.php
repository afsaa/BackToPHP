<?php

class BaseElement
{
    private $tittle;
    private $description;
    public $visible = true;

    public function __construct($tittle, $description)
    {
        $this->tittle = $tittle;
        $this->description = $description;
    }

    public function getTittle()
    {
        return $this->tittle;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
