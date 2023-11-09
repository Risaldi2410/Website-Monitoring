<?php

session_start();
require_once "../koneksi.php";

$title = "Update Murajaah - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

 $kode_murajah = $_GET['kode_murajah'];

$queryMurajah = mysqli_query($conn, "SELECT * FROM tbl_murajah WHERE kode_murajah ='$kode_murajah'");
$data = mysqli_fetch_array($queryMurajah);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Update Murajah</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item "><a href="murajah.php"> Murajah</a></li>
                    <li class="breadcrumb-item active">Update Murajah</li>
                </ol>
                <form action="murajah-edit-act.php" method="POST" enctype="multipart/form-data">
                <div class="card">
					<div class="card-header">
					    <span class="h5 my-3"><i class="fa-solid fa-square-plus"></i> Update Murajah</span>
					    <button type="submit" name="update" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
					    <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
					</div>
					<div class="card-body">
					   <div class="row">
					   	<div class="col-8">
					   		<div class="mb-3 row">
							    <label for="kode_murajah" class="col-sm-2 col-form-label">Kode Murajah</label>
							    <label for="kode_murajah" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="kode_murajah" readonly class="form-control-plaintext border-bottom ps-2" id="kode_murajah" value="<?= $kode_murajah ?>">
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
								<label for="halaman" class="col-sm-2 col-form-label">Halaman</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="halaman" name="halaman" value="<?= $data['halaman'] ?>" required>
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
							    <label for="nilai" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <select name="nilai" id="nilai" class="form-select border-0 border-bottom" required>
							      	<?php
							      	$nilai = ["A","A-","B+","B","B-","C+","C","D","E"];
							      	foreach($nilai as $nil){
							      		if ($data['nilai'] == $nil) { ?>
							      			<option value="<?= $nil; ?>" selected><?= $nil; ?></option>

							      		<?php } else { ?>
							      			<option value="<?= $nil; ?>"><?= $nil; ?></option>
							      		<?php
							      		}
							      	}
							      	?>
							      </select>
					</div>
				</div>
			</form>
        </div>
    </main>


<?php
require_once "../template/footer.php";

 ?>