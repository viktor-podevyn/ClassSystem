<<<<<<< HEAD
<?php
declare(strict_types = 1);

$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "NewVik";
$db = "crud";
$dbchar = 'utf8';

$pdo = new PDO("mysql:host=".$dbhost.";dbname=".$db.";charset=".$dbchar,
        $dbuser, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if (isset($_POST["studentcsv"])) {
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"students.csv\"");

    $stmt = $pdo->prepare("SELECT * FROM student");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
        echo implode(",", [$row['studentID'], $row['firstName'], $row['lastName'], $row['email'], $row['classID']]);
        echo "\r\n";
    }
}

if (isset($_POST["teachercsv"])) {
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"teachers.csv\"");

    $stmt = $pdo->prepare("SELECT * FROM teacher");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
        echo implode(",", [$row['teacherID'], $row['firstName'], $row['lastName'], $row['email']]);
        echo "\r\n";
    }
}

if (isset($_POST["classcsv"])) {
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"classes.csv\"");

    $stmt = $pdo->prepare("SELECT * FROM class");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
        echo implode(",", [$row['classID'], $row['className'], $row['location'], $row['studentID'], $row['teacherID']]);
        echo "\r\n";
    }
=======
<?php
declare(strict_types = 1);

$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";
$db = "crud";
$dbchar = 'utf8';

$pdo = new PDO("mysql:host=".$dbhost.";dbname=".$db.";charset=".$dbchar,
        $dbuser, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if (isset($_POST["studentcsv"])) {
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"students.csv\"");

    $stmt = $pdo->prepare("SELECT * FROM student");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
        echo implode(",", [$row['studentID'], $row['firstName'], $row['lastName'], $row['email'], $row['classID']]);
        echo "\r\n";
    }
}

if (isset($_POST["teachercsv"])) {
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"teachers.csv\"");

    $stmt = $pdo->prepare("SELECT * FROM teacher");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
        echo implode(",", [$row['teacherID'], $row['firstName'], $row['lastName'], $row['email']]);
        echo "\r\n";
    }
}

if (isset($_POST["classcsv"])) {
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"classes.csv\"");

    $stmt = $pdo->prepare("SELECT * FROM class");
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_NAMED)) {
        echo implode(",", [$row['classID'], $row['className'], $row['location'], $row['studentID'], $row['teacherID']]);
        echo "\r\n";
    }
>>>>>>> 4677e1615f9bcc5ae212bb9b691fe5b179549a86
}