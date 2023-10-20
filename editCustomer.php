<?php
session_start();
require_once 'dbConnection.php';

$customerId = $_GET['companyId'];

$compareStmt = $pdo->prepare('SELECT * FROM clients WHERE company_id = ?');
$compareStmt->execute([$customerId]);
$compy = $compareStmt->fetch(PDO::FETCH_ASSOC);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($compy['created_by'] === $_SESSION['user_id']) {
        if (isset($customerId)) {
            $companyName = $_POST['company_name'];
            $contactPerson = $_POST['contact_person'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $createdBy = $_SESSION['user_id'];
            $createdAt = $_POST['created_at'];
            $editedAt = $_POST['edited_at'];

            $editClient = $pdo->prepare('UPDATE clients 
                                    SET company_name = ?, contact_person = ?, phone = ?, address = ?, created_at = ?, edited_at = ?
                                    WHERE company_id = ?');

            $editClient->execute([$companyName, $contactPerson, $phone, $address, $createdAt, $editedAt, $customerId]);
            header("Location: dashboardScreen.php");
            exit;
        }
    } else {
        $_SESSION['update_error'] = "You are not allowed to update it";
        header("Location: dashboardScreen.php");
        exit();
    }
}

?>