<?php

class ClassLoader extends database {

    public function getClassInfo(): array
    {
        $pdo = $this->openConnection()->prepare('select location as classLocation from class');
        $pdo->execute();
        return $pdo->fetchAll();
    }

    public function setClassInfo($className,$location,$studentID,$teacherID) {
        $pdo = $this->openConnection()->prepare('insert into class ($className,$location,$studentID,$teacherID) values (:className,:$location,:$studentID,:$teacherID)');
        $pdo->execute([$className,$location,$studentID,$teacherID]);
    }
}
