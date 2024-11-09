<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "UPDATE user  SET nilai=null WHERE id = $id";
    $query = mysqli_query($sambung, $sql);
    if ($query) {
        header("Location:dashboard_dosen.php?berhasil menghapus");
    } else {
        die("gagal menghapus");
    }
} else {
    die("akses denied");
}

