<?php


declare(strict_types=1);

class ClassController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST): void
    {
        $classLoader = new ClassLoader();
        $classes = $classLoader->getClassesInfo();

        if (isset($_POST['edit'])) {
            $class = $classLoader->getClassInfo($_POST['id']);
        }

        if (isset($_POST['delete'])) {
            $classLoader->delete($_POST['id']);
            echo 'Your record has been deleted';
        }

        if (isset($_POST['view'])) {
            if ($_POST['view'] === 'detail-view') {
                $class = $classLoader->getClassInfo($_POST['id']);
                require 'View/detail-class.php';
            } elseif ($_POST['view'] === 'edit') {
                $class = $classLoader->getClassInfo($_POST['id']);
                $classes = $classLoader->getClassesInfo();
                require 'View/edit-class.php';
            }
        } else {
            require 'View/class-view.php';
        }

        if (isset($_POST['save'])) {
            $classLoader->edit($_POST['id'], $_POST['className'], $_POST['location'], $_POST['classID']);
        }
    }
}
