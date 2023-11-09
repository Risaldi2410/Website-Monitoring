<?php

session_start();
require_once "../koneksi.php";

$title = "Tahsin - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";


?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"> Tahsin</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item active">Tahsin</li>
                </ol>
                <div class="card">
				  <div class="card-header">
				    <span class="h5 my-2"><i class="fa-solid fa-list"></i> Data Tahsin</span>
				    <a href="tahsin-tambah.php" class= "btn btn-primary float-end"><i class="fa-solid fa-plus"></i> Tambah Tahsin</a>
				  </div>
				  <div class="card-body">
				    <table class="table table-hover" id="datatablesSimple">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col"><center>Tanggal</center></th>
					      <th scope="col"><center>Hari</center></th>
					      <th scope="col"><center>Nama Lengkap</center></th>
					      <th scope="col"><center>Jilid</center></th>
					      <th scope="col"><center>Halaman</center></th>
					      <th scope="col"><center>Surah</center></th>
					      <th scope="col"><center>Nilai</center></th>
					      <th scope="col"><center>Opsi</center></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  	$no = 1;
					  	$queryTahsin =mysqli_query($conn, "SELECT * FROM tbl_tahsin");
					  	while ($data = mysqli_fetch_array($queryTahsin)) {
					  	?>
					    <tr>
					      <th scope="row"><?= $no++ ?></th>
					      <td><?=$data['tanggal']?></td>
					      <td><?=$data['hari']?></td>
					      <td><?=$data['nis']?></td>
					      <td><?=$data['jilid']?></td>
					      <td><?=$data['halaman']?></td>
					      <td><?=$data['surah']?></td>
					      <td><?=$data['nilai']?></td>
					      <td align="center">
					      	<a href="tahsin-edit.php?kode_tahsin=<?= $data['kode_tahsin'] ?>" class="btn btn-sm btn-warning" title=" Update Tahsin"><i class="fa-solid fa-pen"></i></a>
					      	<a href="tahsin-hapus.php?kode_tahsin=<?= $data['kode_tahsin'] ?>" class="btn btn-sm btn-danger" title="Hapus Tahsin" onclick="return confirm('Anda yakin akan menghapus data ini ?')"><i class="fa-solid fa-trash"></i></a>
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