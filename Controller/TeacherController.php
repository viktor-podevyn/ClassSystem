<?php
declare(strict_types = 1);

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {


        //load the view
        require 'View/general-view.php';
        require 'View/detail-view.php';
    }
}
