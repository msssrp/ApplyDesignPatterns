<?php

class DB
{
    private static $pdo;

    private function __construct() {}

    public static function getInstance()
    {
        if (!self::$pdo) {
            try {
                self::$pdo = new PDO("mysql:host=localhost;dbname=authentication", 'root', '');
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                throw new Exception("Connection failed: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}

?>
