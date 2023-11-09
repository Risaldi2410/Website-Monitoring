<?php

session_start();
require_once "../koneksi.php";

$title = "Update Tahsin - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

 $kode_tahsin = $_GET['kode_tahsin'];

$queryTahsin = mysqli_query($conn, "SELECT * FROM tbl_tahsin WHERE kode_tahsin ='$kode_tahsin'");
$data = mysqli_fetch_array($queryTahsin);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Update Tahsin</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item "><a href="tahsin.php"> Tahsin</a></li>
                    <li class="breadcrumb-item active">Update Tahsin</li>
                </ol>
                <form action="tahsin-edit-act.php" method="POST" enctype="multipart/form-data">
                <div class="card">
					<div class="card-header">
					    <span class="h5 my-3"><i class="fa-solid fa-square-plus"></i> Update Tahsin</span>
					    <button type="submit" name="update" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
					    <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
					</div>
					<div class="card-body">
					   <div class="row">
					   	<div class="col-8">
					   		<div class="mb-3 row">
							    <label for="kode_tahsin" class="col-sm-2 col-form-label">Kode Tahsin</label>
							    <label for="kode_tahsin" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="kode_tahsin" readonly class="form-control-plaintext border-bottom ps-2" id="kode_tahsin" value="<?= $kode_tahsin ?>">
							    </div>
					    	</div>
					    	<div class="mb-3 row">
							    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
							    <label for="" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="date" name="tanggal" class="form-control-plaintext border-bottom ps-2" id="tanggal" value="<?= $data['tanggal'] ?>">
							    </div>
					    	</div>
					    	<div class="mb-3 row">
								<label for="hari" class="col-sm-2 col-form-label">Hari</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="hari" name="hari" value="<?= $data['hari'] ?>" required>
								</div>
							</div>
					   		<div class="mb-3 row">
							    <label for="nis" class="col-sm-2 col-form-label">Nama Lengkap</label>
							    <label for="nis" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="nis" required class="form-control border-0 border-bottom ps-2" id="nis" value="<?= $data['nis'] ?>">
							    </div>
					    	</div>
							<div class="mb-3 row">
								<label for="jilid" class="col-sm-2 col-form-label">jilid</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="halaman" name="jilid" value="<?= $data['jilid'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="halaman" class="col-sm-2 col-form-label">Halaman</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="halaman" class="form-control border-0 border-bottom" id="halaman" name="halaman" value="<?= $data['halaman'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="surah" class="col-sm-2 col-form-label">Surah</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="surah" class="form-control border-0 border-bottom" id="surah" name="surah" value="<?= $data['surah'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="number" class="form-control border-0 border-bottom" id="nilai" name="nilai" value="<?= $data['nilai'] ?>" required>
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