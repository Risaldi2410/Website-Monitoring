<?php 
session_start();
include 'koneksi.php';
$sekolah = mysqli_query($conn, "SELECT * FROM tbl_sekolah where id = 1");
$data = mysqli_fetch_array($sekolah);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - MAQ</title>
        <link href="assets/sb-admin/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/x-icon" href="assets/images/sekolah.jpeg">
        <style>
            #bgLogin{
                background-image: url("assets/images/<?= $data['gambar']?>");
                background-size: cover;
                background-position: center center;
            }
        </style>
    </head>
    
    <body id="bgLogin">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                    	<?php 
									    if (isset($_GET['pesan'])) {
									    	// code...
									    	if ($_GET['pesan']=='gagal') {
									    		echo "Login Anda Gagal, Silahkan Cek Username & Password";
									    	}
									    }
									    ?>
                                        <?php 
                                        if (isset($_GET['pesan'])) {
                                            // code...
                                            if ($_GET['pesan']=='berhasil') {
                                                echo "Selama Anda berhasil daftar akun";
                                            }
                                        }
                                        ?>
                                        <form action="login-act.php" method="POST">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="username" name="username" type="text" pattern="[A-Za-z0-9]{3,}" title="kombinasi angka minimal 3 karakter" placeholder="username" autocomplete="off" required />
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" placeholder="Password" minlength="4" name="password" required />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <button type="submit" name="login" class="btn btn-primary col-12 rounded-pill my-2">Login</button>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="daftar.php">Anda Belum Punya Akun ? Register</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted small">Copyright &copy; PESANTREN MAQ <?= date("Y")?></div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/sb-admin/js/scripts.js"></script>
    </body>
</html>
