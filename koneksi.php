<?php 
$server = "localhost";
$user = "root";
$password = "";
$namadb = "akademik5063";


$sambung = mysqli_connect($server, $user, $password, $namadb);
if(!$sambung){
    die("Ada masalah koneksi ke database: ". mysqli_connect_error());
}
   
   ?>