<?php
// Connect Database
include "service/database.php";
session_start();


// pesan untuk register
$register_message = "";

if (isset($_SESSION["is_login"])) {
    header("location: dashboard.php");
}

if (isset($_POST['register'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $hash_password = hash("sha256", $password); //encryp password

    // memasukan data users ke database
    try {
        $sql = "INSERT INTO users (username, password) VALUES
        ('$username', '$hash_password')";

        if ($db->query($sql)) {
            $register_message = "Daftar akun berhasil, silahkan login";
        } else {
            $register_message = "Daftar akun gagal, silahkan coba lagi";
        }
    } catch (mysqli_sql_exception) {
        $register_message = "Username sudah digunakan, silahkan ganti yang lain";
    }
    $db->close();
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

    <h3>DAFTAR AKUN</h3>
    <i><?= $register_message ?></i>
    
    <form action="register.php" method="POST">
        <input type="text" placeholder="username" name="username">
        <input type="password" placeholder="password" name="password">
        <button type="submit" name="register">daftar sekarang</button>
    </form>
    
    <!-- Footer -->
    <?php include "layout/footer.html" ?>

</body>

</html>