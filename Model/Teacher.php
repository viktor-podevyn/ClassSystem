<?php

class Teacher
{
    private $name;

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }
}
