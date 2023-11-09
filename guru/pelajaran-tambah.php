<?php

session_start();
require_once "../koneksi.php";

$title = "Tambah Pelajaran - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

 $carikode =mysqli_query($conn,"SELECT max(kode_pelajaran) from tbl_pelajaran ") or die(mysqli_error());
        $datakode=mysqli_fetch_array($carikode);

        if ($datakode) {
            $nilaikode =substr($datakode[0], 1);
            $kode =(int) $nilaikode;
            $kode = $kode +1;
            $kode_otomatis ="P" .str_pad($kode, 2,"0", STR_PAD_LEFT);
                        // code...
        }else{
            $kode_otomatis="P01";
        }

if (isset($_GET['msg'])) {
	$msg = $_GET['msg'];
}else {
	$msg ='';
}

$alert = '';

if ($msg == 'added') {
	$alert ='<div class="alert alert-success alert-dismissible fade show" role="alert">
  <i class="fa-solid fa-circle-check"></i> Tambah Pelajaran berhasil..!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Pelajaran</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item "><a href="pelajaran.php"> Pelajaran</a></li>
                    <li class="breadcrumb-item active">Tambah Pelajaran</li>
                </ol>
                <form action="pelajaran-proses.php" method="POST" enctype="multipart/form-data">
                	<?php 
                		if ($msg !== '') {
                			echo $alert;
                		}

                	?>
                <div class="card">
					<div class="card-header">
					    <span class="h5 my-3"><i class="fa-solid fa-square-plus"></i> Tambah Pelajaran</span>
					    <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
					    <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
					</div>
					<div class="card-body">
					   <div class="row">
					   	<div class="col-8">
					   		<div class="mb-3 row">
							    <label for="kode_pelajaran" class="col-sm-2 col-form-label">Kode Pelajaran</label>
							    <label for="kode_pelajaran" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="kode_pelajaran" readonly class="form-control-plaintext border-bottom ps-2" id="kode_pelajaran" value="<?= $kode_otomatis ?>">
							    </div>
					    	</div>
					    	<div class="mb-3 row">
							    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
							    <label for="" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="date" name="tanggal" class="form-control-plaintext border-bottom ps-2" id="tanggal">
							    </div>
					    	</div>
					    	<div class="mb-3 row">
								<label for="hari" class="col-sm-2 col-form-label">Hari</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="hari" name="hari" required>
								</div>
							</div>
					   		<div class="mb-3 row">
								    <label for="nis" class="col-sm-2 col-form-label">Siswa</label>
								    <label for="nis" class="col-sm-1 col-form-label">:</label>
								    <div class="col-sm-9" style="margin-left: -50px;">
									    <select name="nis" id="nis" class="form-select border-0 border-bottom" required>
									    	<option value="" selected>-- Pilih Siswa--</option>
									    	<?php 
									    	$querySiswa = mysqli_query($conn, "SELECT * FROM tbl_siswa");
									    	while ($dataSiswa = mysqli_fetch_array($querySiswa)) { ?>
									    		<option value="<?= $dataSiswa['nama'] ?>"><?= $dataSiswa['nama'] ?></option> 
									    		<?php
									    	}
									    	?>
										</select>
								    </div>
								</div>
							<div class="mb-3 row">
								<label for="pelajaran" class="col-sm-2 col-form-label">Pelajaran</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								   <select name="pelajaran" id="pelajaran" class="form-select border-0 border-bottom" required>
								   	<option value="" selected>--Pilih Pelajaran--</option>
								   	<option value="Nahwu Shoraf">Nahwu Shoraf</option>
								   	<option value="Bahasa Arab">Bahasa Arab</option>
								   	<option value="Matematika">Matematika</option>
								   	<option value="Bahasa Inggris">Bahasa Inggris</option>
								   </select>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="text" class="form-control border-0 border-bottom" id="nilai" name="nilai" required>
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