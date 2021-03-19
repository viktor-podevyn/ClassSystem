<?php

class TeacherLoader extends database
{

    public function getTeacherInfo($id): array
    {
<<<<<<< HEAD
        $pdo = $this->openConnection()->prepare('select className,student.studentID,concat_ws(" ",firstName,lastName) as name from teacher left join class on teacher.teacherID = class.teacherID where teacher.teacherID = :id');
        $pdo->bindValue(':id', $id);
        $pdo->execute();
        return $pdo->fetchAll();
=======
        $pdo = $this->openConnection()->prepare('SELECT * FROM teacher WHERE teacherID = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
        $result =  $pdo->fetch();
        return $result;
>>>>>>> 4677e1615f9bcc5ae212bb9b691fe5b179549a86
    }

    public function getTeachersInfo(): array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('select className, teacher.teacherID,concat_ws(" ",firstName,lastName) as name from teacher left join class on class.teacherID = teacher.teacherID');
        $handle->execute();
        return $handle->fetchAll();
<<<<<<< HEAD

=======
>>>>>>> 4677e1615f9bcc5ae212bb9b691fe5b179549a86
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
