<?php 
include'koneksi.php';

$carikode =mysqli_query($conn,"SELECT max(kode_user) FROM tbl_user") or die(mysqli_error());
$datakode =mysqli_fetch_array($carikode);

if ($datakode) {
    $nilaikode =substr($datakode[0], 1);
    $kode =(int) $nilaikode;
    $kode =$kode + 1;
    $kode_otomatis ="U" .str_pad($kode, 2,"0", STR_PAD_LEFT);
}else{
    $kode_otomati="U01";
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - MAQ</title>
        <link href="assets/sb-admin/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">REGISTER</h3></div>
                                    <div class="card-body">
                                        <form action="daftar-act.php" method="POST" enctype="multipart/form-data">
                                            <input type="hidden" name="kode_user" placeholder="kode_user" value="<?php echo $kode_otomatis ?>">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="nama_lengkap" name="nama_lengkap" type="text" placeholder="nama_lengkap" />
                                                <label for="nama_lengkap">Nama Lengkap</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="username" name="username" type="text" placeholder="username" />
                                                <label for="username">Username</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" name="password" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <input  type="hidden" name="level" value="Wali" />
                                                    
                                            <div class="mt-4 mb-0">
                                                <button type="submit" class="btn btn-primary col-12 rounded-pill my-2">Register</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php">Go to login</a></div>
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
