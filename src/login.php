<?php

    // Connect Database
    include "service/database.php";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo $username . ' ' . $password;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Header -->
    <?php include "layout/header.html" ?>

    <form action="login.php" method="POST">
        <h3>MASUK AKUN</h3>
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="login">masuk sekarang</button>
    </form>

    <!-- Footer -->
    <?php include "layout/footer.html" ?>
    
</body>
</html>