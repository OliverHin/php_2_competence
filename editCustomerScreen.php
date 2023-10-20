<!-- <?php
        session_start();
        require_once 'dbConnection.php';

        $companyyy = intval($_GET['companyId']);
        $compareStmt = $pdo->prepare('SELECT * FROM clients WHERE company_id = ?');
        $compareStmt->execute([$companyyy]);
        $compy = $compareStmt->fetch(PDO::FETCH_ASSOC);
        ?> -->



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer</title>
    <style>
        body {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Edit customer</h1>

    <form action="editCustomer.php" method="post">

        <label for="companyName">Company Name:</label>
        <input type="text" name="company_name" id="companyName">

        <label for="contactPerson">Contact Person:</label>
        <input type="text" name="contact_person" id="contactPerson">

        <label for="phoneNumber">Phone Number:</label>
        <input type="text" name="phone" id="phoneNumber">

        <label for="address">Adress</label>
        <input type="text" name="address" id="address">

        <label for="createdAt">Created at:</label>
        <input type="date" name="created_at" id="createdAt">

        <label for="editedAt">Edited at:</label>
        <input type="date" name="edited_at" id="editedAt">

        <input type="submit" value="Submit">



    </form>

    <a href="logout.php"><button>Log out</button></a>

</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Edit Customer</title>
    <style>
        body {
            background-color: #f4f4f4;
        }
    </style>

</head>

<body>
    <section class="section">
    <div class="form-container">
        <div class="is-pulled-right mt-2">
            <a href="logout.php" class="button is-danger is-light is-small is-rounded">Log out</a>
        </div>
        <h1 class="title is-3 has-text-centered">Edit customer</h1>

        <form action="editCustomer.php?companyId=<?php echo $compy['company_id'];?>" method="post">
            <div class="field">
                <label class="label" for="companyName">Company Name:</label>
                <div class="control">
                    <input class="input is-small" type="text" name="company_name" id="companyName" value="<?php echo $compy['company_name'];?>">
                </div>
            </div>

            <div class="field">
                <label class="label" for="contactPerson">Contact Person:</label>
                <div class="control">
                    <input class="input is-small" type="text" name="contact_person" id="contactPerson" value="<?php echo $compy['contact_person'];?>">
                </div>
            </div>

            <div class="field">
                <label class="label" for="phoneNumber">Phone Number:</label>
                <div class="control">
                    <input class="input is-small" type="text" name="phone" id="phoneNumber" value="<?php echo $compy['phone'];?>">
                </div>
            </div>

            <div class="field">
                <label class="label" for="address">Address:</label>
                <div class="control">
                    <input class="input is-small" type="text" name="address" id="address" value="<?php echo $compy['address'];?>">
                </div>
            </div>

            <div class="field">
                <label class="label" for="createdAt">Created at:</label>
                <div class="control">
                    <input class="input is-small" type="date" name="created_at" id="createdAt">
                </div>
            </div>

            <div class="field">
                <label class="label" for="editedAt">Edited at:</label>
                <div class="control">
                    <input class="input is-small" type="date" name="edited_at" id="editedAt">
                </div>
            </div>

            <div class="field is-grouped is-grouped-centered">
                <div class="control">
                    <input class="button is-success" type="submit" value="Submit">
                </div>
                <div class="control">
                    <a href="dashboardScreen.php" class="button is-info">Back to Dashboard</a>
                </div>
            </div>
        </form>
    </div>
    </section>