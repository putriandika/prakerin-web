<?php

include 'koneksi.php';

$username   = $_POST['username'];
$password   = $_POST['password'];

$user = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND  password='$password' ");
$chek = mysqli_num_rows($user);
if ($chek) {
    header("location:../index_tambah_bank.php");
} else {
    echo 'gagal';
    header("location:login.php");
}
