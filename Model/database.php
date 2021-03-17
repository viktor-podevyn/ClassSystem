<?php
declare(strict_types=1);

class database
{
    private string $dbhost = "localhost:3306";
    private string $dbuser = "root";
    private string $dbpass = "NewVik";
    private string $db = "crud";

    public function openConnection(): PDO
    {
        $databaseInfo = 'mysql:host=' . $this->dbhost . ';dbname=' . $this->db;
        $pdo = new PDO($databaseInfo, $this->dbuser, $this->dbpass);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
