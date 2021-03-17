<?php

require_once 'database.php';

$search_keyword = '';

if(!empty($_POST['search']['keyword'])) {
    $search_keyword = $_POST['search']['keyword'];
}
$sql = 'SELECT * FROM student WHERE firstName LIKE :keyword OR lastName LIKE :keyword  :keyword ORDER BY id DESC ';

$query = $sql;
$pdo_statement = $pdo->prepare($query);
$pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>