<?php
session_start();
include("koneksi.php");
$id = $_GET['id'];
$sql = mysqli_query($sambung, "SELECT * FROM user where id='$id'");
// $query = mysqli_query($sambung, $sql);
$dafuser = mysqli_fetch_assoc($sql);

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

                        <h3>Halaman Edit nilai</h3><br>
                        <form action="contr_edit.php" method="POST">
                            <p hidden="true">
                                <label for="id">username: </label>
                                <input type="text" name="id" value="<?php echo $dafuser['id'] ?>" />
                            </p>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label text-left" for="typeEmailX-2">nilai</label>
                                <input type="text" name="nilai"  class="form-control form-control-lg" />

                            


                            <div class="text-center form-check">
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit" Value="Save" name="edit">SIMPAN</button>
                            </div>

                            <div class="text-center">
                                <a href="dashboard_dosen.php">BACK</a>
                            </div>
                        </form>



                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>