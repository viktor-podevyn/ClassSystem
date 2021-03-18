<?php
declare(strict_types = 1);


class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET,array $POST): void
    {
        $loader = new StudentLoader();
        $students = $loader->getUsersInfo();

      if (isset($_POST['delete'])) {
            $loader->delete($_POST['id']);
            echo 'Your record has been deleted';
        }

        if (isset($_POST['edit'])) {
            $student = $loader->getUserInfo($_POST['id']);
           // $newEntry = new Student($POST['studentID'], $POST['firstName'], $POST['lastName'], $POST['email']);
            $loader->edit($_POST['id']);
        }

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
                require 'View/edit.php';
            }
            }
        else {
            require 'View/student-view.php';
        }

//        if (isset($_POST['save'])) {
//
//        }



//        if (isset($_POST['view'])){
//            if ($_POST['view'] === 'detail-view' && $_POST['studentID']){
//                require 'View/detail-view.php';
//                include 'includes/detail.php';
//            }
//            elseif ($_POST['teacherID']){
//                require 'View/edit.php';
//                  include 'includes/teacherdetails.php';
//            }
//        }
//        else {
//            require 'View/student-view.php';
//      include 'includes/classdetails.php';
//        }




    }
}
