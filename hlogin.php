<?php 
$errormessage = @$_GET["error"];

session_start();

$akses = @$_SESSION['akses'];

if ($akses == true ){
    header("location:form_ini.php?anda masih login");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <style>
        .bgs {
            background-color: #5335b8;
        }
    </style>
</head>

<body class="bgs">

    <section class="">
        <div class="container py-5 h-50">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <form action="contr_log.php" method="POST">
                            <div class="card-body p-5 ">

                                <h3 class="mb-2 my-0 text-center">LOGIN</h3>
                                <hr class="my-4">

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label text-left" for="typeEmailX-2">Username</label>
                                    <input type="text" name="username" id="typeEmailX-2" class="form-control form-control-lg" />

                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label text-left" for="">Password</label>
                                    <input type="Password" name="password" id="" class="form-control form-control-lg" />
                                </div>


                                <div class="text-center">
                                    <a href="form_ini.php"> <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Login</button></a>
                                </div>
                                <div class="text-center">
                                    <a href="hallregistere.html">REGISTER</a>
                                </div>


                            </div>
                        </form>




                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "Login gagal! username dan password salah";
        } else if ($_GET['pesan'] == "logout") {
            echo "Anda telah berhasil logout";
        } else if ($_GET['pesan'] == "belum_login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
</body>

</html>