<?php
session_start();

require_once "../koneksi.php";
$title = "Tambah User - MTS KSM KALUPAPI";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

$queryNis = mysqli_query($conn, "SELECT max(nis) as maxnis FROM tbl_siswa");
$data = mysqli_fetch_array($queryNis);
$maxnis = $data["maxnis"];

$noUrut = (int) substr($maxnis, 3, 3);
$noUrut ++;
$maxnis = "Nis".sprintf("%03s", $noUrut);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"> Tambah Siswa</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item "><a href="siswa.php"> Siswa</a></li>
                    <li class="breadcrumb-item active"> Tambah Siswa</li>
                </ol>
                <form action="siswa-proses.php" method="POST" enctype="multipart/form-data">
                <div class="card">
				  <div class="card-header">
				    <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah Siswa</span>
				    <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
				    <button type="reser" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
				  </div>
				  <div class="card-body">
				  	<div class="row">
				  		<div class="col-8">
				  			<div class="mb-3 row">
							    <label for="nis" class="col-sm-2 col-form-label">Nis</label>
							    <label for="nis" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="nis" readonly class="form-control-plaintext border-bottom ps-2" id="nis" value="<?= $maxnis ?>">
							    </div>
					    	</div>
					    	<div class="mb-3 row">
							    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
							    <label for="nama" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="nama" required class="form-control border-0 border-bottom ps-2" id="nama">
							    </div>
					    	</div>
					    	<div class="mb-3 row">
							    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
							    <label for="kelas" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <select name="kelas" id="kelas" class="form-select border-0 border-bottom" required>
							      	<option selected>--Pilih Kelas--<</option>
							      	<option value="VII">VII</option>
							      	<option value="VIII">VIII</option>
							      </select>
							    </div>
					    	</div>
					    	<div class="mb-3 row">
							    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
							    <label for="alamat" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" required></textarea>
							    </div>
					    	</div>
				  		</div>
				  		<div class="col-4 text-center px-5">
				  			<img src="../assets/images/user.jpg" alt="" class="mb-3" width="40%">
				  			<input type="file" name="image" class="form-control form-control-sm">
				  			<small class="text-secondary">Pilih Foto PNG, JPG atau JPEG dengan ukuran maksimal 1 MB</small>
				  			<div><small class="text-secondary">widht = height</small></div>
				  		</div>
				  	</div>
				  </div>
				</div>
				</form>
		</div>
	</main>

<?php 
require_once "../template/footer.php";

?>