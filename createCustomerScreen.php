
<?php

require_once 'dbConnection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Creating Customer</title>
    <style>
        body {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>

<section class="section">
    <div class="container">
        <div class="is-pulled-right mt-2">
        <a href="logout.php" class="button is-danger is-light is-small is-rounded">Log out</a>
        </div>
        <h1 class="title">Storing a Customer in the Database</h1>

        <form action="createCustomer.php" method="post" class="form">
            <div class="field">
                <label for="companyName" class="label">Company Name:</label>
                <div class="control">
                    <input class="input" type="text" name="company_name" id="companyName" required>
                </div>
            </div>

            <div class="field">
                <label for="contactPerson" class="label">Contact Person:</label>
                <div class="control">
                    <input class="input" type="text" name="contact_person" id="contactPerson" required>
                </div>
            </div>

            <div class="field">
                <label for="phoneNumber" class="label">Phone Number:</label>
                <div class="control">
                    <input class="input" type="text" name="phone" id="phoneNumber" required>
                </div>
            </div>

            <div class="field">
                <label for="address" class="label">Address:</label>
                <div class="control">
                    <input class="input" type="text" name="address" id="address" required>
                </div>
            </div>

            <div class="field">
                <label for="createdAt" class="label">Created at:</label>
                <div class="control">
                    <input class="input" type="date" name="created_at" id="createdAt" required>
                </div>
            </div>

            <div class="field">
                <label for="editedAt" class="label">Edited at:</label>
                <div class="control">
                    <input class="input" type="date" name="edited_at" id="editedAt" required>
                </div>
            </div>

            <div class="field is-grouped is-grouped-centered">
                <div class="control">
                    <input type="submit" value="Submit" class="button is-primary">
                </div>
                <div class="control">
                    <a href="dashboardScreen.php" class="button is-info">Back to Dashboard</a>
                </div>
            </div>
        </form>
    </div>
</section>


</body>
</html>

