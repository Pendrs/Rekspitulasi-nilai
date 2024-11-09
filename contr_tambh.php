<?php
include 'koneksi.php';


$username = $_POST['username'];
$password =  $_POST['password'];

$sql = "INSERT INTO user (username,password) VALUES ( '$username', '$password')";

if( $sambung->query($sql) === TRUE ) {
    header("location:dashboard_admin.php?register=berhasil");
}
else {
   
    echo "gagal";
    exit;
}      
?>