<?php

$hostname = "database";
$username = "root";
$password = "password";
$db_name = "buku_tamu";

$db = mysqli_connect($hostname, $username, $password, $db_name);

if($db->connect_error) {
    echo "koneksi database rusak";
    die("error!");
}

?>