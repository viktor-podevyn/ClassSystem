<?php
declare(strict_types = 1);


class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET,array $POST): void
    {
        $loader = new StudentLoader();
        $classLoader = new ClassLoader();
        $students = $loader->getUsersInfo();

<<<<<<< HEAD
        //$result = $loader->getUserInfo($_POST['id']);

        if (isset($_POST['delete'])) {
=======
      if (isset($_POST['delete'])) {
>>>>>>> 4677e1615f9bcc5ae212bb9b691fe5b179549a86
            $loader->delete($_POST['id']);
            echo 'Your record has been deleted';
        }

        if (isset($_POST['edit'])) {
            $student = $loader->getUserInfo($_POST['id']);
        }

<<<<<<< HEAD
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $result = $loader->getUserInfo($_GET['id']);}


        if (isset($_POST['view']) ){
            if ($_POST['view'] === 'detail-view'){
                require 'View/detail-view.php';
            }
            elseif ($_POST['view'] === 'edit'){
                require 'View/edit.php';
            }
        }
=======
        if (isset($_POST['create'])) {
            $loader->create($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['className']);
        }

        if (isset($_POST['view']) ){
            if ($_POST['view'] === 'detail-view'){
                $student = $loader->getUserInfo($_POST['id']);
                require 'View/detail-view.php';
            }
            elseif ($_POST['view'] === 'edit'){
                $student = $loader->getUserInfo($_POST['id']);
                $classes= $classLoader->getClassesInfo();
                var_dump($classes);
                require 'View/edit.php';
            }
            }
>>>>>>> 4677e1615f9bcc5ae212bb9b691fe5b179549a86
        else {
            require 'View/student-view.php';
        }

<<<<<<< HEAD
=======
        if (isset($_POST['save'])) {
            $loader->edit($_POST['id'],$_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['classID']);
        }
>>>>>>> 4677e1615f9bcc5ae212bb9b691fe5b179549a86
    }
}
