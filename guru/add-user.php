<?php

session_start();
require_once "../koneksi.php";

$title = "Tambah User - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

 $carikode =mysqli_query($conn,"SELECT max(kode_user) from tbl_user ") or die(mysqli_error());
        $datakode=mysqli_fetch_array($carikode);

        if ($datakode) {
            $nilaikode =substr($datakode[0], 1);
            $kode =(int) $nilaikode;
            $kode = $kode +1;
            $kode_otomatis ="U" .str_pad($kode, 2,"0", STR_PAD_LEFT);
                        // code...
        }else{
            $kode_otomatis="U01";
        }

if (isset($_GET['msg'])) {
	$msg = $_GET['msg'];
}else {
	$msg ='';
}

$alert = '';

if ($msg == 'added') {
	$alert ='<div class="alert alert-success alert-dismissible fade show" role="alert">
  <i class="fa-solid fa-circle-check"></i> Tambah User berhasil, segera ganti password anda !
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah User</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item "><a href="user.php"> User</a></li>
                    <li class="breadcrumb-item active">Tambah User</li>
                </ol>
                <form action="add-user-act.php" method="POST" enctype="multipart/form-data">
                	<?php 
                		if ($msg !== '') {
                			echo $alert;
                		}

                	?>
                <div class="card">
					<div class="card-header">
					    <span class="h5 my-3"><i class="fa-solid fa-square-plus"></i> Tambah User</span>
					    <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
					    <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
					</div>
					<div class="card-body">
					   <div class="row">
					   	<div class="col-8">
					   		<div class="mb-3 row">
							    <label for="kode_user" class="col-sm-2 col-form-label">Kode User</label>
							    <label for="kode_user" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="kode_user" readonly class="form-control-plaintext border-bottom ps-2" id="kode_user" value="<?= $kode_otomatis ?>">
							    </div>
					    	</div>
					   		<div class="mb-3 row">
								<label for="username" class="col-sm-2 col-form-label">Username</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="username" name="username" maxlength="20" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="nama_lengkap" name="nama_lengkap" maxlength="20" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="password" class="col-sm-2 col-form-label">Password</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="password" name="password" maxlength="20" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="level" class="col-sm-2 col-form-label">Level</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								   <select name="level" id="level" class="form-select border-0 border-bottom" required>
								   	<option value="" selected>--Pilih Level--</option>
								   	<option value="Guru">Guru</option>
								   	<option value="Pimpinan">Pimpinan Pondok</option>
								   	<option value="Wali">Wali Siswa</option>
								   </select>
								</div>
							</div>
					   	</div>
					   	<div class="col-4 text-center px-5">
					   		<img src="../assets/images/user.jpg" alt="gambar user" class="mb-3" width="40%">
					   		<input type="file" name="foto" class="form-control form-control-sm">
					   		<small>Pilih Foto PNG, JPG atau JPEG dengan ukuran maximal 1 MB</small>
					   		<div><small class="text-secondary">Widht = Height</small></div>
					   </div>
					</div>
				</div>
			</form>
        </div>
    </main>


<?php
require_once "../template/footer.php";

 ?>