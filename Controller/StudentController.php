<?php
declare(strict_types = 1);


class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET,array $POST): void
    {
        $loader = new StudentLoader();
        $students = $loader->getUsersInfo();
        $student = $loader->getUsersInfo();

        //$result = $loader->getUserInfo($_POST['id']);

        if (isset($_POST['delete'])) {
            $loader->delete($_POST['id']);
            echo 'Your record has been deleted';
        }

        if (isset($_POST['edit'])) {
            $loader->edit($_POST['id']);
            echo 'Your record has been updated';
            require 'View/edit.php';
        }

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
        else {
            require 'View/student-view.php';
        }

    }
}
