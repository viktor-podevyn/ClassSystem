<?php
declare(strict_types = 1);

class ClassController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET,array $POST): void
    {
        $loader = new ClassLoader();
        $classes = $loader->getClassesInfo();
<<<<<<< HEAD
        // $teacher = $loader->getTeachersInfo();
=======
        var_dump($loader->getClassesInfo());

        if (isset($_POST['delete'])) {
            $loader->delete($_POST['id']);
            echo 'Your record has been deleted';
        }

        if (isset($_POST['edit'])) {
            $loader->edit($_POST['id']);
            echo 'Your record has been updated';
            require 'View/edit.php';
        }


        if (isset($_POST['view']) ){
            if ($_POST['view'] === 'detail-view'){
                require 'View/detail-view.php';
            }
            elseif ($_POST['view'] === 'edit'){
                require 'View/editclass.php';
            }
        }
        else {
            require 'View/class-view.php';
        }
>>>>>>> 4677e1615f9bcc5ae212bb9b691fe5b179549a86

        if (isset($_POST['delete'])) {
            $loader->delete($_POST['id']);
            echo 'Your record has been deleted';
        }

        if (isset($_POST['edit'])) {
            $loader->edit($_POST['id']);
            echo 'Your record has been updated';
            require 'View/edit.php';
        }

<<<<<<< HEAD
        //load the view
        require 'View/class-view.php';
        require 'View/detail-view.php';
=======
>>>>>>> 4677e1615f9bcc5ae212bb9b691fe5b179549a86
    }
}
