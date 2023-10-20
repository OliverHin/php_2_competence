<?php
session_start();
require 'dbConnection.php';

$customerId = $_GET['companyId'];

$compareStmt = $pdo->prepare('SELECT * FROM clients WHERE company_id = ?');
$compareStmt->execute([$customerId]);
$compy = $compareStmt->fetch(PDO::FETCH_ASSOC);

    if ($compy['created_by'] === $_SESSION['user_id']) {
            $deleteClient = $pdo->prepare('DELETE FROM clients WHERE company_id = ?');
            $deleteClient->execute([$customerId]);
            header("Location: dashboardScreen.php");
            exit;
    } else {
        $_SESSION['delete_error'] = "You are not allowed to delete it";
        header("Location: dashboardScreen.php");
        exit();
    }

?>
