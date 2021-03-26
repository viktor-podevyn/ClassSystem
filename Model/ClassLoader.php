<?php

class ClassLoader extends database
{

    public function getClassInfo($id): array
    {

        $pdo = $this->openConnection();
        $handle = $pdo->prepare('select * from class where class.classID = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
        return $handle->fetch();
    }

    public function getClassesInfo(): array
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('select className, class.classID, location from class');
        $handle->execute();
        return $handle->fetchAll();
    }

    public function edit($id)
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('update class set firstName = :firstName, lastName = :lastName,email = :email, className = :className where teacherID = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
    }

    public function delete($id): void
    {
        $pdo = $this->openConnection();
        $handle = $pdo->prepare('delete from class where classID = :id');
        $handle->bindValue(':id', $id);
        $handle->execute();
    }


}
