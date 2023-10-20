<?php
session_start();
require 'dbConnection.php';

$companyName = $_POST['company_name'];
$contactPerson = $_POST['contact_person'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$createdBy = $_SESSION['user_id'];
$createdAt = $_POST['created_at'];
$editedAt = $_POST['edited_at'];

$sql = "INSERT INTO clients (company_name, contact_person, phone, address, created_by, created_at, edited_at) VALUE (?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$companyName, $contactPerson, $phone, $address, $createdBy, $createdAt, $editedAt]);
header("Location: dashboardScreen.php");
exit;


?>