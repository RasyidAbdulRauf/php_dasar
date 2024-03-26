<?php
    // Connect Database
    include "service/database.php";

    if(isset($_POST['register'])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "INSERT INTO users (username, password) VALUES
        ('$username', '$password')";

        if ($db->query($sql)) {
            echo "DATA MASUK";
        }else {
            echo "DATA GAGAL MASUK";
        }
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

    <form action="register.php" method="POST">
        <h3>DAFTAR AKUN</h3>
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="register">daftar sekarang</button>
    </form>

    <!-- Footer -->
    <?php include "layout/footer.html" ?>
    
</body>
</html>