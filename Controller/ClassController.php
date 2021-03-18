<?php
declare(strict_types = 1);

class ClassController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET,array $POST): void
    {
        $loader = new ClassLoader();
        $classes = $loader->getClassesInfo();
        // $teacher = $loader->getTeachersInfo();

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
        require 'View/class-view.php';
        require 'View/detail-view.php';
    }
}
