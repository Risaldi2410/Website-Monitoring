<?php
session_start();

require_once "../koneksi.php";
$title = "Update Nilai - MTS KSM KALUPAPI";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

$kode_nilai = $_GET['kode_nilai'];

$queryNilai = mysqli_query($conn, "SELECT * FROM tbl_nilai WHERE kode_nilai ='$kode_nilai'");
$data = mysqli_fetch_array($queryNilai);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"> Update Nilai</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item "><a href="nilai.php"> Nilai</a></li>
                    <li class="breadcrumb-item active"> Update Nilai</li>
                </ol>
                <form action="nilai-edit-act.php" method="POST" enctype="multipart/form-data">
                <div class="card">
				  <div class="card-header">
				    <span class="h5 my-2"><i class="fa-solid fa-pen-to-square"></i> Update Nilai</span>
				    <button type="submit" name="update" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Update </button>
				  </div>
				  <div class="card-body">
				  	<div class="row">
				  		<div class="col-8">
				  			<div class="mb-3 row">
							    <label for="kode_nilai" class="col-sm-2 col-form-label">Kode Nilai</label>
							    <label for="kode_nilai" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="kode_nilai" readonly class="form-control-plaintext border-bottom ps-2" id="kode_nilai" value="<?= $kode_nilai ?>">
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
							    <label for="nilai" class="col-sm-2 col-form-label">Nilai</label>
							    <label for="nilai" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="nilai" required class="form-control border-0 border-bottom ps-2" id="nilai" value="<?= $data['nilai'] ?>">
							    </div>
					    	</div>
					    	<div class="mb-3 row">
							    <label for="konversi" class="col-sm-2 col-form-label">Konversi</label>
							    <label for="konversi" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <select name="konversi" id="konversi" class="form-select border-0 border-bottom" required>
							      	<?php
							      	$konversi = ["A","A-","B+","B","B-","C+","C","D","E"];
							      	foreach($konversi as $konv){
							      		if ($data['konversi'] == $konv) { ?>
							      			<option value="<?= $konv; ?>" selected><?= $konv; ?></option>

							      		<?php } else { ?>
							      			<option value="<?= $konv; ?>"><?= $konv; ?></option>
							      		<?php
							      		}
							      	}
							      	?>
							      </select>
							    </div>
					    	</div>
					    	<div class="mb-3 row">
							    <label for="kesalahan" class="col-sm-2 col-form-label">Kesalahan</label>
							    <label for="kesalahan" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <input type="text" name="kesalahan" required class="form-control border-0 border-bottom ps-2" id="kesalahan" value="<?= $data['kesalahan'] ?>">
							    </div>
					    	</div>
					    	<div class="mb-3 row">
							    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
							    <label for="keterangan" class="col-sm-1 col-form-label">:</label>
							    <div class="col-sm-9" style="margin-left: -50px;">
							      <textarea name="keterangan" id="keterangan" cols="30" rows="3" class="form-control" required><?= $data['keterangan'] ?></textarea>
							    </div>
					    	</div>
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