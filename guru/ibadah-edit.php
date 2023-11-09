<?php

session_start();
require_once "../koneksi.php";

$title = "Update Ibadah - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

 $kode_ibadah = $_GET['kode_ibadah'];

$queryIbadah = mysqli_query($conn, "SELECT * FROM tbl_ibadah WHERE kode_ibadah ='$kode_ibadah'");
$data = mysqli_fetch_array($queryIbadah);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Update Ibadah Santri</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item "><a href="ibadah.php"> Ibadah Santri</a></li>
                    <li class="breadcrumb-item active">Update Ibadah Santri</li>
                </ol>
                <form action="ibadah-edit-act.php" method="POST" enctype="multipart/form-data">
                <div class="card">
					<div class="card-header">
					    <span class="h5 my-3"><i class="fa-solid fa-square-plus"></i> Update Ibadah Santri</span>
					    <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
					    <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
					</div>
					<div class="card-body">
					   <div class="row">
					   	<div class="col-8">
					   		<div class="mb-3 row">
							    <label for="kode_ibadah" class="col-sm-2 col-form-label">Kode Ibadah</label>
							    <label for="kode_ibadah" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="kode_ibadah" readonly class="form-control-plaintext border-bottom ps-2" id="kode_ibadah" value="<?= $kode_ibadah ?>">
							    </div>
					    	</div>
					    	<div class="mb-3 row">
							    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
							    <label for="" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="date" name="tanggal" class="form-control-plaintext border-bottom ps-2" id="tanggal"  value="<?= $data['tanggal'] ?>">
							    </div>
					    	</div>
					    	<div class="mb-3 row">
								<label for="hari" class="col-sm-2 col-form-label">Hari</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="hari" name="hari"  value="<?= $data['hari'] ?>" required>
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
								<label for="tahajud" class="col-sm-2 col-form-label">Tahajjud</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="tahajud" name="tahajud" value="<?= $data['tahajud'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="subuh" class="col-sm-2 col-form-label">Subuh</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="subuh" name="subuh" value="<?= $data['subuh'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="duha" class="col-sm-2 col-form-label">Dhuha</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="duha" name="duha" value="<?= $data['duha'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="zuhur" class="col-sm-2 col-form-label">Dzuhur</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="zuhur" name="zuhur" value="<?= $data['zuhur'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="ashar" class="col-sm-2 col-form-label">Ashar</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="ashar" name="ashar" value="<?= $data['ashar'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="magrib" class="col-sm-2 col-form-label">Magrib</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="magrib" name="magrib" value="<?= $data['magrib'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="isya" class="col-sm-2 col-form-label">Isya</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="isya" name="isya" value="<?= $data['isya'] ?>" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="puasa" class="col-sm-2 col-form-label">Puasa Sunnah</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="puasa" name="puasa" value="<?= $data['puasa'] ?>" required>
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