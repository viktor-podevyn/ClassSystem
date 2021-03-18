<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'test';

if (isset($_POST["studentxml"])) {

$conn = new PDO("mysql:host=$host; dbname=$db", $user, $password);

$xml = new SimpleXMLElement('<users/>');
$stmt = $conn->query("SELECT * FROM student");
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $user = $xml->addChild('user');

    foreach ($row as $key => $value) {
        $user->addChild($key, $value);
    }
}

}