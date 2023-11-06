<?php

require_once 'AuthenticationStrategy.php';
require_once __DIR__ . '/../../db/db.php'; 

class LocalAuthStrategy implements AuthenticationStrategy
{
    private $dbName;

    public function __construct($dbName)
    {
        $this->dbName = $dbName;
    }

    public function authenticate($credentials)
    {
        $username = $credentials['username'];
        $password = $credentials['password'];

        try {
            $pdo = DB::getInstance($this->dbName);

            // Retrieve user from the database
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                return true; // Authentication successful
            } else {
                return false; // Authentication failed
            }
        } catch (PDOException $e) {
            // Handle database connection or query errors
            throw new Exception("Error: " . $e->getMessage());
        }
    }
}
?>
