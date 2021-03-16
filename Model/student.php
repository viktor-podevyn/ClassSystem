<?php
declare(strict_types=1);

class student
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

class student extends database {
    protected function getUserinfo($name) {
        $sql = "SELECT * FROM student";
        $connection = $this->openConnection()->prepare($sql);
        $connection->execute([$name]);

        $result = $connection->fetchAll();
    }
}