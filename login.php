<?php
session_start();
require 'dbConnection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 'Hello World!';
    print_r($_POST);
    if (isset($_POST['username'], $_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $pdo->prepare('SELECT user_id, username, email, password FROM users WHERE username = ?');
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];

            header("Location: dashboardScreen.php");
        } else {
            $_SESSION['login_error'] = 'Wrong username/password!';
            // header('Location: loginScreen.php');
            
        }
    } else {
        $_SESSION['login_error'] = 'Enter your username and password!';
        // header('Location: loginScreen.php');
    }
}
