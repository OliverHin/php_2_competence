<?php
    $companyId = $_GET['companyId'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <a href="deleteCustomer.php?companyId=<?php echo $companyId; ?>"><button type="button">Delete</button></a>
        <a href="dashboardScreen.php"><button type="button">Do not delete</button></a>
</body>
</html>