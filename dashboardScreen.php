<?php

session_start();
require 'dbConnection.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

$stmt = $pdo->prepare('SELECT * FROM USERS WHERE user_id = ?');
$stmt->execute([$user_id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt2 = $pdo->prepare('SELECT * FROM clients');
$stmt2->execute();
$clients = $stmt2->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom right, #6a0dad, #ff206e);
        }

        .dashboard-container {
            max-width: 800px;
            padding: 2rem;
        }

        .message-body {
            background-color: #363636;
        }
    </style>
    <title>Dashboard</title>
</head>
<body>
    <!-- <main class="columns">
    <section class="column is-three-quarters">
        <h1 class="title is-2 has-text-centered">Welcome back, <?php echo $user['username']; ?></h1>
        <p class="subtitle is-5 has-text-centered">Your email is: <?php echo $user['email']; ?></p>
        <a href="createCustomerScreen.php" class="button is-primary is-light is-small is-rounded">Create a customer</a>
        <?php foreach ($clients as $client) : ?>
            <div class="box">
                <p><?php echo 'The company name is: ' . $client['company_name']; ?></p>
                <p><?php echo 'The contact person is: ' . $client['contact_person']; ?></p>
                <p><?php echo 'The phone number is: ' . $client['phone']; ?></p>
                <p><?php echo 'The address is: ' . $client['address']; ?></p>
                <?php if ($user_id === $client['created_by']) : ?>
                    <a href="editCustomerScreen.php?companyId=<?php echo $client['company_id']; ?>" class="button is-link is-light is-small is-rounded">Edit a customer</a>
                    <a href="delete_confirmation.php?companyId=<?php echo $client['company_id']; ?>" class="button is-danger is-light is-small is-rounded">Delete a customer</a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </section>
    <section class="column is-one-quarter">
        <a href="logout.php" class="button is-danger is-light is-small is-rounded">Log out</a>
    </section>
    </main> -->

    <main class="columns">
        <section class="column is-10">
            <h1 class="title is-2 has-text-centered">Welcome back, <?php echo $user['username']; ?></h1>
            <p class="subtitle is-5 has-text-centered">Your email is: <?php echo $user['email']; ?></p>
            <a href="createCustomerScreen.php" class="button is-primary is-light is-small is-rounded my-4">Create a customer</a>
            <?php foreach ($clients as $client) : ?>
                <div class="box">
                    <p><?php echo 'The company name is: ' . $client['company_name']; ?></p>
                    <p><?php echo 'The contact person is: ' . $client['contact_person']; ?></p>
                    <p><?php echo 'The phone number is: ' . $client['phone']; ?></p>
                    <p><?php echo 'The address is: ' . $client['address']; ?></p>
                    <?php if ($user_id === $client['created_by']) : ?>
                        <a href="editCustomerScreen.php?companyId=<?php echo $client['company_id']; ?>" class="button is-link is-light is-small is-rounded">Edit a customer</a>
                        <a href="delete_confirmation.php?companyId=<?php echo $client['company_id']; ?>" class="button is-danger is-light is-small is-rounded">Delete a customer</a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </section>
        <section class="column is-2 m-3"><a href="logout.php" class="button is-danger is-light is-small is-rounded">Log out</a></section>
    </main> 
</body>
</html>
