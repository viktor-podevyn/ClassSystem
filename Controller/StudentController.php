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

        if (isset($_POST['delete'])) {
            $loader->delete($_POST['id']);
            echo 'Your record has been deleted';
        }

        if (isset($_POST['edit'])) {
            $loader->edit($_POST['id']);
            echo 'Your record has been updated';
            require 'View/edit.php';
        }

        //load the view
        require 'View/student-view.php';
        require 'View/detail-view.php';
    }
}
