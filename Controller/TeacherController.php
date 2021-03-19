<?php
declare(strict_types = 1);

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET,array $POST): void
    {
        $loader = new TeacherLoader();
        $classLoader = new ClassLoader();
        $teachers = $loader->getTeachersInfo();

        if (isset($_POST['edit'])) {
            $student = $loader->getUserInfo($_POST['id']);
        }

        if (isset($_POST['delete'])) {
            $loader->delete($_POST['id']);
            echo 'Your record has been deleted';
        }

        if (isset($_POST['view'])){
            if ($_POST['view'] === 'detail-view'){
                $teacher = $loader->getTeacherInfo($_POST['id']);
                require 'View/detail-teacher.php';
            }
            elseif ($_POST['view'] === 'edit'){
                $teacher = $loader->getTeacherInfo($_POST['id']);
                $classes= $classLoader->getClassesInfo();
                require 'View/edit-teacher.php';
            }
        }
        else {
            require 'View/teacher-view.php';
        }

        if (isset($_POST['save'])) {
            $loader->edit($_POST['id'],$_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['classID']);
        }
    }
}

