<?php

class StudentLoader extends database
{

    public function getUserInfo($id): ?array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('SELECT * FROM student left join class on student.classID = class.classID WHERE student.studentID = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
        return $handle->fetch();
    }

    public function getUsersInfo(): array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('select className,student.studentID,concat_ws(" ",firstName,lastName) as name from student left join class on student.classID = class.classID ');
        $handle->execute();
        return $handle->fetchAll();
    }

    public function create($firstName, $lastName, $email, $classID): void
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('insert into student (firstName,lastName,email,className) values (:firstName,:lastName,:email, :className)');
        $handle->bindValue(':firstName', $firstName);
        $handle->bindValue(':lastName', $lastName);
        $handle->bindValue(':email', $email);
        $handle->bindValue(':className', $classID);
        $handle->execute();
    }

    public function edit($id,$firstName, $lastName, $email, $classID): void
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('update student set firstName = :firstName, lastName = :lastName,email = :email, classID = :classID where studentID = :id');
        $handle->bindValue(':id', $id);
        $handle->bindValue(':firstName', $_POST['firstName']);
        $handle->bindValue(':lastName', $_POST['lastName']);
        $handle->bindValue(':email', $_POST['email']);
        $handle->bindValue(':classID', $_POST['classID']);
        $handle->execute();
    }

    public function delete($id): void
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('delete from student where studentID = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
    }


}
