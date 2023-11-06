<?php
class DB
{
    private static $pdo;

    private function __construct() {}

    public static function getInstance($dbName = "authentication")
    {
        if (!self::$pdo) {
            try {
                self::$pdo = new PDO("mysql:host=localhost;dbname=$dbName", 'root', '');
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                throw new Exception("Connection failed: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
?>
