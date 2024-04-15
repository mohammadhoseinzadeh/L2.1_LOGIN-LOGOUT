<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L1.4-PANEL-ADMIN</title>
</head>

<body>
    <h1>L1.4-PANEL-ADMIN</h1>
    <p>HI ADMIN!</p>

</body>

</html>