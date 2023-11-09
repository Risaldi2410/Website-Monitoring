<?php

session_start();
require_once "../koneksi.php";

$title = "Update Kesehatan - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

 $kode_kesehatan = $_GET['kode_kesehatan'];

$queryKesehatan = mysqli_query($conn, "SELECT * FROM tbl_kesehatan WHERE kode_kesehatan ='$kode_kesehatan'");
$data = mysqli_fetch_array($queryKesehatan);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Update Kesehatan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item "><a href="kesehatan.php"> Kesehatan Santri</a></li>
                    <li class="breadcrumb-item active">Update Kesehatan</li>
                </ol>
                <form action="kesehatan-edit-act.php" method="POST" enctype="multipart/form-data">
                <div class="card">
					<div class="card-header">
					    <span class="h5 my-3"><i class="fa-solid fa-square-plus"></i> Update Kesehatan</span>
					    <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
					    <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
					</div>
					<div class="card-body">
					   <div class="row">
					   	<div class="col-8">
					   		<div class="mb-3 row">
							    <label for="kode_kesehatan" class="col-sm-2 col-form-label">Kode Kesehatan</label>
							    <label for="kode_kesehatan" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="kode_kesehatan" readonly class="form-control-plaintext border-bottom ps-2" id="kode_kesehatan" value="<?= $kode_kesehatan ?>">
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
							    <label for="nis" class="col-sm-2 col-form-label">Nama Lengkap</label>
							    <label for="nis" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="nis" required class="form-control border-0 border-bottom ps-2" id="nis" value="<?= $data['nis'] ?>">
							    </div>
					    	</div>
							<div class="mb-3 row">
								<label for="diagnosa" class="col-sm-2 col-form-label">Diagnosa</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <textarea name="diagnosa" id="diagnosa" cols="30" rows="3" class="form-control" required><?= $data['diagnosa'] ?></textarea>
								</div>
							</div>
							<div class="mb-3 row">
							    <label for="pengobatan" class="col-sm-2 col-form-label">Pengobatan</label>
							    <label for="pengobatan" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <textarea name="pengobatan" id="pengobatan" cols="30" rows="3" class="form-control" required><?= $data['pengobatan'] ?></textarea>
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