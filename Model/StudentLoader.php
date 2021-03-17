<?php

class StudentLoader extends database
{

    public function getUserInfo($id): array
    {
        $pdo = $this->openConnection()->prepare('select className,studentID,concat_ws(" ",firstName,lastName) as name from student left join class on student.studentID = class.studentID where student.studentID = :id');
        $pdo->bindValue(':id', $id);
        $pdo->execute();
        return $pdo->fetchAll();
    }

    public function getUsersInfo(): array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('select className,student.studentID,concat_ws(" ",firstName,lastName) as name from student left join class on student.classID = class.classID ');
        //$pdo = $this->openConnection()->prepare('select className,studentID,concat_ws(" ",firstName,lastName) as name from student left join class on student.classID = class.classID');
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
        $pdo = $this->openConnection()->prepare('update student set firstName = :firstName, lastName = :lastName,email = :email, className = :className where studentID = :id');
        $pdo->bindValue(':id', $id);
        $pdo->execute();
    }

    public function delete()
    {
        $pdo = $this->openConnection()->prepare('delete from student where studentID = :id');
        $pdo->execute();
    }



}
