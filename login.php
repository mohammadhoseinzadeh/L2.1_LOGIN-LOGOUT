<?php
session_start();
if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email === 'm.hosseiin.1989@gmail.com' && $password === '1234') {
        $_SESSION['user'] = $email;
        header("Location: panel.php");
    } else {
        echo 'WRONG ! ';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECK LOGIN</title>
</head>

<body>
    <h1>CHECK LOGIN</h1>
    <p>Plese inter yur data</p>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
        <br>
        <br>
        <label for="password">Password</label>
        <input type="text" id="password" name="password">
        <br>
        <br>
        <button type="submit">submit</button>
    </form>
</body>

</html>