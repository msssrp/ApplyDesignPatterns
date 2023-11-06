<?php

require_once '../src/Authentication/LocalAuthStrategy.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $credentials = [
        'username' => $username,
        'password' => $password,
    ];

    $dbName = 'authentication';

    $authStrategy = new LocalAuthStrategy($dbName);

    if ($authStrategy->authenticate($credentials)) {
        session_start();
        $_SESSION['username'] = $username;

        echo "Login successful! Welcome, $username. <a href='logout.php'>Logout</a>";
    } else {
        echo "Login failed. <a href='index.php'>Try again</a> or <a href='register.php'>register</a> for a new account.";
    }
} else {
    header("Location: index.php");
    exit;
}
?>
