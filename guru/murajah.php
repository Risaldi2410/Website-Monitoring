<?php

session_start();
require_once "../koneksi.php";

$title = "Murajaah - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";


?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"> Murajah</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item active">Murajaah</li>
                </ol>
                <div class="card">
				  <div class="card-header">
				    <span class="h5 my-2"><i class="fa-solid fa-list"></i> Data Murajaah</span>
				    <a href="murajah-tambah.php" class= "btn btn-primary float-end"><i class="fa-solid fa-plus"></i> Tambah Tahfiz</a>
				  </div>
				  <div class="card-body">
				    <table class="table table-hover" id="datatablesSimple">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col"><center>Tanggal</center></th>
					      <th scope="col"><center>Hari</center></th>
					      <th scope="col"><center>Nama Lengkap</center></th>
					      <th scope="col"><center>Halaman</center></th>
					      <th scope="col"><center>Jumlah</center></th>
					      <th scope="col"><center>Nilai</center></th>
					      <th scope="col"><center>Opsi</center></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  	$no = 1;
					  	$queryMurajah =mysqli_query($conn, "SELECT * FROM tbl_murajah");
					  	while ($data = mysqli_fetch_array($queryMurajah)) {
					  	?>
					    <tr>
					      <th scope="row"><?= $no++ ?></th>
					      <td><?=$data['tanggal']?></td>
					      <td><?=$data['hari']?></td>
					      <td><?=$data['nis']?></td>
					      <td><?=$data['halaman']?></td>
					      <td><?=$data['jumlah']?></td>
					      <td><?=$data['nilai']?></td>
					      <td align="center">
					      	<a href="murajah-edit.php?kode_murajah=<?= $data['kode_murajah'] ?>" class="btn btn-sm btn-warning" title=" Update Murajah"><i class="fa-solid fa-pen"></i></a>
					      	<a href="murajah-hapus.php?kode_murajah=<?= $data['kode_murajah'] ?>" class="btn btn-sm btn-danger" title="Hapus Murajah" onclick="return confirm('Anda yakin akan menghapus data ini ?')"><i class="fa-solid fa-trash"></i></a>
					      </td>
					    </tr>
					    <?php } ?>
					  </tbody>
					</table>
				  </div>
				</div>
        </div>
    </main>

<?php 
require_once "../template/footer.php";

?>