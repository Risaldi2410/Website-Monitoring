<?php

session_start();
require_once "../koneksi.php";

$title = "Tambah Kasus - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

 $carikode =mysqli_query($conn,"SELECT max(kode_kasus) from tbl_kasus ") or die(mysqli_error());
        $datakode=mysqli_fetch_array($carikode);

        if ($datakode) {
            $nilaikode =substr($datakode[0], 1);
            $kode =(int) $nilaikode;
            $kode = $kode +1;
            $kode_otomatis ="K" .str_pad($kode, 2,"0", STR_PAD_LEFT);
                        // code...
        }else{
            $kode_otomatis="K01";
        }

if (isset($_GET['msg'])) {
	$msg = $_GET['msg'];
}else {
	$msg ='';
}

$alert = '';

if ($msg == 'added') {
	$alert ='<div class="alert alert-success alert-dismissible fade show" role="alert">
  <i class="fa-solid fa-circle-check"></i> Tambah Data Kesehatan Santri berhasil..!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Kasus</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item "><a href="kasus.php"> Kasus Santri</a></li>
                    <li class="breadcrumb-item active">Tambah Kasus</li>
                </ol>
                <form action="kasus-proses.php" method="POST" enctype="multipart/form-data">
                	<?php 
                		if ($msg !== '') {
                			echo $alert;
                		}

                	?>
                <div class="card">
					<div class="card-header">
					    <span class="h5 my-3"><i class="fa-solid fa-square-plus"></i> Tambah Kasus</span>
					    <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
					    <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
					</div>
					<div class="card-body">
					   <div class="row">
					   	<div class="col-8">
					   		<div class="mb-3 row">
							    <label for="kode_kasus" class="col-sm-2 col-form-label">Kode Kasus</label>
							    <label for="kode_kasus" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="kode_kasus" readonly class="form-control-plaintext border-bottom ps-2" id="kode_kasus" value="<?= $kode_otomatis ?>">
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
								<label for="kasus" class="col-sm-2 col-form-label">Kasus</label>
								<label for="" class="col-sm-1 col-form-label">:</label>
								<div class="col-sm-9" style="margin-left: -50px;">
								    <textarea name="kasus" id="kasus" cols="30" rows="3" class="form-control" required></textarea>
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
							    <label for="saran" class="col-sm-2 col-form-label">Saran</label>
							    <label for="saran" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <textarea name="saran" id="saran" cols="30" rows="3" class="form-control" required></textarea>
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