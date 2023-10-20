<?php
session_start();
require 'dbConnection.php';

if (isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $hashedPw = password_hash($password, PASSWORD_DEFAULT);
    
    if (empty($username) || empty($password) || empty($email)) {
    exit('Please complete the registration form!');
    }
    
    $stmt = $pdo->prepare('SELECT user_id, password FROM users WHERE email = ?');
    $stmt-> execute ([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user) {
        exit ("The username already exists!");
    } else {
        $insertstm = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (?, ?, ?)');
        $insertstm->execute([$username, $email, $hashedPw]);
        echo 'Registration successfull!';
        header("Location: loginScreen.php");
    }
}
?>
