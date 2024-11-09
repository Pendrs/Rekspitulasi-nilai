<?php
session_start();
include 'koneksi.php';


$username_admin = "admin";
$password_admin = "admin1234";


$username_dosen = "dosen";
$password_dosen = "1234";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $username_admin && $password == $password_admin) {
    $_SESSION['akses'] = 'admin';
    header("location:dashboard_admin.php");
    exit;
} elseif ($username == $username_dosen && $password == $password_dosen) {
    $_SESSION['akses'] = 'dosen';
    header("location:dashboard_dosen.php");
    exit;
} elseif (!empty($username) && !empty($password)) {
    $query = mysqli_query($sambung, "SELECT * FROM user ");
    $result = mysqli_num_rows($query);

    if ($result > 0) {
        session_start();

        $_SESSION['akses'] = true;
        header("location:dashboard_user.php");
    } else {
        $_SESSION["error"] = "Username atau Password anda salah";
        header("location:hlogin.php?pesan=gagal");
    }
} else {
    $_SESSION["error"] = "Username atau Password tidak boleh kosong";
    header("location:hlogin.php?pesan=error");
};
