<?php

session_start();
require_once "../koneksi.php";

$title = "Tambah Nilai - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

 $carikode =mysqli_query($conn,"SELECT max(kode_nilai) from tbl_nilai ") or die(mysqli_error());
        $datakode=mysqli_fetch_array($carikode);

        if ($datakode) {
            $nilaikode =substr($datakode[0], 1);
            $kode =(int) $nilaikode;
            $kode = $kode +1;
            $kode_otomatis ="N" .str_pad($kode, 2,"0", STR_PAD_LEFT);
                        // code...
        }else{
            $kode_otomatis="N01";
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
            <h1 class="mt-4">Tambah Nilai</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item "><a href="nilai.php"> Nilai</a></li>
                    <li class="breadcrumb-item active">Tambah Nlai</li>
                </ol>
                <form action="nilai-proses.php" method="POST" enctype="multipart/form-data">
                	<?php 
                		if ($msg !== '') {
                			echo $alert;
                		}

                	?>
                <div class="card">
					<div class="card-header">
					    <span class="h5 my-3"><i class="fa-solid fa-square-plus"></i> Tambah Nilai</span>
					    <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
					    <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
					</div>
					<div class="card-body">
					   <div class="row">
					   	<div class="col-8">
					   		<div class="mb-3 row">
							    <label for="kode_nilai" class="col-sm-2 col-form-label">Kode User</label>
							    <label for="kode_nilai" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="kode_nilai" readonly class="form-control-plaintext border-bottom ps-2" id="kode_nilai" value="<?= $kode_otomatis ?>">
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
								<label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="number" class="form-control border-0 border-bottom" id="nilai" name="nilai" required>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="konversi" class="col-sm-2 col-form-label">Konversi</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								   <select name="konversi" id="konversi" class="form-select border-0 border-bottom" required>
								   	<option value="" selected>--Pilih Konversi--</option>
								   	<option value="A">A</option>
								   	<option value="A-">A-</option>
								   	<option value="B+">B+</option>
								   	<option value="B">B</option>
								   	<option value="B-">B-</option>
								   	<option value="C+">C+</option>
								   	<option value="C">C</option>
								   	<option value="D">D</option>
								   	<option value="E">E</option>
								   </select>
								</div>
							</div>
							<div class="mb-3 row">
								<label for="kesalahan" class="col-sm-2 col-form-label">Kesalahan</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <input type="number" class="form-control border-0 border-bottom" id="kesalahan" name="kesalahan" required>
								</div>
							</div>
							<div class="mb-3 row">
			    				<label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
			    				<label for="keterangan" class="col-sm-1 col-form-label">:</label>
			    				<div class="col-sm-9" style="margin-left: -50px;">
			    					<textarea name="keterangan" id="keterangan" cols="30" rows="3" class="form-control" required></textarea>
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