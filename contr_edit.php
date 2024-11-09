<?php
include("koneksi.php");
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nilai = $_POST['nilai'];

    $sql = "UPDATE user SET nilai='$nilai' where id='$id'";
    $query = mysqli_query($sambung, $sql);
    if ($query) {
        header("location:dashboard_dosen.php?berhasil menambah nilai");
    } else {
        die("gagal mengubah");
    }
} else {
    die("akses denied");
};
