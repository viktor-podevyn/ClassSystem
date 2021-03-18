<?php
declare(strict_types=1);

//include all your model files here
require 'Model/database.php';
require 'Model/Student.php';
require 'Model/ClassLoader.php';
require 'Model/StudentLoader.php';
require 'Model/TeacherLoader.php';


//include all your controllers here
require 'Controller/StudentController.php';
require 'Controller/TeacherController.php';
require 'Controller/ClassController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

 if(isset($_GET['page']) && $_GET['page'] === 'student') {
    $controller = new StudentController();
    $controller->render($_GET, $_POST);
}

elseif ($_GET['page']??NULL === 'teacher'){
    $controller = new TeacherController();
    $controller->render($_GET, $_POST);
}
else {
    $controller = new ClassController();
    $controller->render($_GET, $_POST);
}

