<?php
declare(strict_types = 1);


class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET,array $POST): void
    {
        $loader = new StudentLoader();
        $students = $loader->getUsersInfo();



        //load the view
        require 'View/student-view.php';
        require 'View/detail-view.php';
    }
}
