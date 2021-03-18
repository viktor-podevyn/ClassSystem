<?php
declare(strict_types = 1);

$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";
$db = "crud";

if (isset($_POST["studentcsv"])) {

    $pdo = new PDO("mysql:host=$dbhost;dbname=$db", $dbuser, $dbpass);
    $sql = "SELECT * FROM student";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

    $columnNames = array();
    if (!empty($rows)) {
        $firstRow = $rows[0];
        foreach ($firstRow as $colName => $val) {
            $columnNames[] = $colName;
        }
    }

    $fileName = 'students.csv';

    header('Content-Type: application/excel');
    header('Content-Disposition: attachment; filename="' . $fileName . '"');

    $fp = fopen('php://output', 'w');

    fputcsv($fp, $columnNames);

    foreach ($rows as $row) {
        fputcsv($fp, $row);
    }

    fclose($fp);
}