<?php

class TeacherLoader extends database
{

    public function getTeacherInfo($id): array
    {
        $pdo = $this->openConnection()->prepare('SELECT * FROM teacher WHERE teacherID = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
        $result =  $pdo->fetch();
        return $result;
    }

    public function getTeachersInfo(): array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('select className, teacher.teacherID,concat_ws(" ",firstName,lastName) as name from teacher left join class on class.teacherID = teacher.teacherID');
        $handle->execute();
        return $handle->fetchAll();
    }

    public function setTeachersInfo($firstName, $lastName, $email, $className)
    {
        $pdo = $this->openConnection()->prepare('insert into teacher (firstName,lastName,email,className) values (:firstName,:lastName,:email, :className)');
        $pdo->execute([$firstName, $lastName, $email, $className]);
    }

    public function edit($id)
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('update teacher set firstName = :firstName, lastName = :lastName,email = :email, className = :className where teacherID = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
    }

    public function delete($id): void
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('delete from teacher where teacherID = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
    }


}
