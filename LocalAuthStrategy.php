<?php

require_once 'AuthenticationStrategy.php';
require_once 'db.php'; 

class LocalAuthStrategy implements AuthenticationStrategy
{
    public function authenticate($credentials)
    {
        $username = $credentials['username'];
        $password = $credentials['password'];

        try {
            $pdo = DB::getInstance();
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
            $stmt->bindParam(':username', $username);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                return true; 
            } else {
                return false;
            }
        } catch (PDOException $e) {
            throw new Exception("Error: " . $e->getMessage());
        }
    }
}
?>
