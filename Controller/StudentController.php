<?php
declare(strict_types = 1);

class StudentController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET,array $POST): void
    {
        $loader = new StudentLoader();
        $classLoader = new ClassLoader();
        $students = $loader->getUsersInfo();

        if (isset($_POST['delete'])) {
            $loader->delete($_POST['id']);
            echo 'Your record has been deleted';
        }

        if ((isset($_POST['save'])) && !empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['email'])) {
            $loader->save(new Student($_POST['id'],$_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['classID']));
        }

        $view = 'View/student-view.php';
        if (isset($_POST['view'])){
            if ($_POST['view'] === 'detail-view'){
                $student = $loader->getUserInfo($_POST['id']);
                $view = 'View/detail-view.php';
            }
            elseif ($_POST['view'] === 'edit'){
                $student = $loader->getUserInfo($_POST['id']);
                $classes= $classLoader->getClassesInfo();
                $view = 'View/edit.php';
            }
            elseif ($_POST['view'] === 'create-new') {
                // $student = $loader->create($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['className']);
                $view = 'View/create.php';
            }
        }
        require $view;
    }


}