<?php
session_start();
include("koneksi.php");
$akses = @$_SESSION['akses'];

if ($akses != true) {
    header("location:../hlogin.php?pesan=belum_login");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="bootstrap-css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>
    <style>
        .bgs {
            background-color: #5335b8;
        }
    </style>
</head>

<body class="bgs">
    <div class="container py-5 h-30 text-align-center">
        <div class="row d-flex justify-content-center align-items-center h-50">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <h1 class="text-center">Halaman dashboard dosen</h1>

                        <div class="table-responsive">

                          
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="table-secondary">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>nilai</th>
                                        <th>AKSI</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM user";
                                    $query = mysqli_query($sambung, $sql);
                                    $nomor = 1;
                                    while ($dafuser = mysqli_fetch_array($query)) {
                                        echo "<tr>";
                                        echo "<td>" . $nomor . "</td>";

                                        echo "<td>" . $dafuser['username'] . "</td>";
                                        echo "<td>" . $dafuser['nilai'] . "</td>";
                                        echo "<td>";
                                        echo "<a href='hedit.php?id=" . $dafuser['id'] . "'><button >Edit Nilai</button></a>";
                                        echo "<a href='hdel.php?id=" . $dafuser['id'] . "'> <button>Hapus Nilai</button></a>";
                                        echo "</td>";
                                        echo "</tr>";
                                        $nomor++;
                                    }
                                    ?>



                                </tbody>
                            </table>
                        </div>
                        <a href="proses_logout.php"><button class="btn btn-danger" >logout</button></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
