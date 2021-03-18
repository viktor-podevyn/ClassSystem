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
            $loader->edit($_POST['id']);
        }

        if (isset($_POST['create'])) {
            $loader->create($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['className']);
        }

//        if(isset($_GET['id'])){
//            $id = $_GET['id'];
//            $result = $loader->getUserInfo($_GET['id']);
//        var_dump($result);}

        if (isset($_POST['view']) ){
            if (isset($_POST['view']) === 'detail-view'){
                $result = $loader->getUserInfo($_GET['id']);
                require 'View/detail-view.php';
            }
            }
        else {
            require 'View/student-view.php';
        }


        //load the view
      ;
        require 'View/edit.php';
    }
}
