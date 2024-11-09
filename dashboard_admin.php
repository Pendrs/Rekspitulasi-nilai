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
                        <h1 class="text-center">Halaman dashboard admin</h1>

                        <div class="table-responsive">


                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr class="table-secondary">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>nilai</th>
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
                                        echo "</td>";
                                        echo "</tr>";
                                        $nomor++;
                                    }
                                    ?>



                                </tbody>
                            </table>
                        </div>
                        <a href="proses_logout.php"><button class="btn btn-danger">logout</button></a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Tambah Mahasiswa
                        </button>


                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah mahasiswa</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="contr_tambh.php" method="POST">
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label text-left" for="typeEmailX-2">Username</label>
                                                <input type="text" name="username" id="typeEmailX-2" class="form-control form-control-lg" />

                                            </div>

                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <label class="form-label text-left" for="typePasswordX-2">Password</label>
                                                <input name="password" type="password" id="typePasswordX-2" class="form-control form-control-lg" />

                                            </div>
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">tutup </button>
                                                <button type="button submit" class="btn btn-primary">simpan </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>