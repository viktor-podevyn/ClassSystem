<?php

class StudentLoader extends database
{

    public function getUserInfo($id): array
    {
        $pdo = $this->openConnection()->prepare('SELECT * FROM student WHERE studendID = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
        $result =  $pdo->fetch();
        return $result;
    }

    public function getUsersInfo(): array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('select className,student.studentID,concat_ws(" ",firstName,lastName) as name from student left join class on student.classID = class.classID ');
        $handle->execute();
        return $handle->fetchAll();

    }

    public function setUsersInfo($firstName, $lastName, $email, $className)
    {
        $pdo = $this->openConnection()->prepare('insert into student (firstName,lastName,email,className) values (:firstName,:lastName,:email, :className)');
        $pdo->execute([$firstName, $lastName, $email, $className]);
    }

    public function edit($id)
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('update student set firstName = :firstName, lastName = :lastName,email = :email, className = :className where studentID = :id');
        $handle->bindValue(':id', $id);
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
