<?php

session_start();
require_once "../koneksi.php";

$title = "Tambah Nilai - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

 $kode_tahfiz = $_GET['kode_tahfiz'];

$queryTahfiz = mysqli_query($conn, "SELECT * FROM tbl_tahfiz WHERE kode_tahfiz ='$kode_tahfiz'");
$data = mysqli_fetch_array($queryTahfiz);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Nilai</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item "><a href="tahfiz.php"> Tahfiz</a></li>
                    <li class="breadcrumb-item active">Update Tahfiz</li>
                </ol>
                <form action="tahfiz-edit-act.php" method="POST" enctype="multipart/form-data">
                <div class="card">
					<div class="card-header">
					    <span class="h5 my-3"><i class="fa-solid fa-square-plus"></i> Update Tahfiz</span>
					    <button type="submit" name="update" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
					    <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
					</div>
					<div class="card-body">
					   <div class="row">
					   	<div class="col-8">
					   		<div class="mb-3 row">
							    <label for="kode_tahfiz" class="col-sm-2 col-form-label">Kode User</label>
							    <label for="kode_tahfiz" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="kode_tahfiz" readonly class="form-control-plaintext border-bottom ps-2" id="kode_tahfiz" value="<?= $kode_tahfiz ?>">
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
								<label for="surah1" class="col-sm-2 col-form-label">Surah 1</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="surah1" name="surah1" value="<?= $data['surah1'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="ayat1" class="col-sm-2 col-form-label">Ayat 1</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="ayat1" name="ayat1" value="<?= $data['ayat1'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="surah2" class="col-sm-2 col-form-label">Surah 2</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="surah2" name="surah2" value="<?= $data['surah2'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="ayat2" class="col-sm-2 col-form-label">Ayat 2</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="ayat2" name="ayat2" value="<?= $data['ayat2'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="surah3" class="col-sm-2 col-form-label">Surah 3</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="surah3" name="surah3" value="<?= $data['surah3'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="ayat3" class="col-sm-2 col-form-label">Ayat 3</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="ayat3" name="ayat3" value="<?= $data['ayat3'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="number" class="form-control border-0 border-bottom" id="jumlah" name="jumlah" value="<?= $data['jumlah'] ?>" required>
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