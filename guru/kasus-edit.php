<?php

session_start();
require_once "../koneksi.php";

$title = "Update Kasus - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

 $kode_kasus = $_GET['kode_kasus'];

$queryKasus = mysqli_query($conn, "SELECT * FROM tbl_kasus WHERE kode_kasus ='$kode_kasus'");
$data = mysqli_fetch_array($queryKasus);
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Kasus</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item "><a href="kasus.php"> Kasus Santri</a></li>
                    <li class="breadcrumb-item active">Update Kasus</li>
                </ol>
                <form action="kasus-edit-act.php" method="POST" enctype="multipart/form-data">
                <div class="card">
					<div class="card-header">
					    <span class="h5 my-3"><i class="fa-solid fa-square-plus"></i> Update Kasus</span>
					    <button type="submit" name="update" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
					    <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
					</div>
					<div class="card-body">
					   <div class="row">
					   	<div class="col-8">
					   		<div class="mb-3 row">
							    <label for="kode_kasus" class="col-sm-2 col-form-label">Kode Kasus</label>
							    <label for="kode_kasus" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="kode_kasus" readonly class="form-control-plaintext border-bottom ps-2" id="kode_kasus" value="<?= $kode_kasus ?>">
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
								<label for="kasus" class="col-sm-2 col-form-label">Kasus</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <textarea name="kasus" id="kasus" cols="30" rows="3" class="form-control" required><?= $data['kasus'] ?></textarea>
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
							    <label for="saran" class="col-sm-2 col-form-label">Saran</label>
							    <label for="saran" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <textarea name="saran" id="saran" cols="30" rows="3" class="form-control" required><?= $data['saran'] ?></textarea>
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