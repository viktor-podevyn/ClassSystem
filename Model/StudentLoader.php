<?php

class StudentLoader extends database
{

    public function getUserInfo(): array
    {
        $pdo = $this->openConnection()->prepare('select studentID,concat_ws(" ",firstName,lastName) as name from student');
        $pdo->execute();
        return $pdo->fetchAll();
    }

    public function setUserInfo($firstName, $lastName, $email, $className)
    {
        $pdo = $this->openConnection()->prepare('insert into student (firstName,lastName,email,className) values (:firstName,:lastName,:email, :className)');
        $pdo->execute([$firstName, $lastName, $email, $className]);
    }

    public function edit()
    {
        $pdo = $this->openConnection()->prepare('update student set firstName = :firstName, lastName = :lastName,email = :email, className = :className where studentID = :id');
        $pdo->execute();
    }

    public function delete()
    {
        $pdo = $this->openConnection()->prepare('delete from student where studentID = :id');
        $pdo->execute();
    }



}
