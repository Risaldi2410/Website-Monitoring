<?php

session_start();
require_once "../koneksi.php";

$title = "Pelajaran - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";


?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"> Pelajaran</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item active">Pelajaran</li>
                </ol>
                <div class="card">
				  <div class="card-header">
				    <span class="h5 my-2"><i class="fa-solid fa-list"></i> Data Pelajaran</span>
				    <a href="pelajaran-tambah.php" class= "btn btn-primary float-end"><i class="fa-solid fa-plus"></i> Tambah Pelajaran</a>
				  </div>
				  <div class="card-body">
				    <table class="table table-hover" id="datatablesSimple">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col"><center>Tanggal</center></th>
					      <th scope="col"><center>Hari</center></th>
					      <th scope="col"><center>Nama Lengkap</center></th>
					      <th scope="col"><center>Pelajaran</center></th>
					      <th scope="col"><center>Nilai</center></th>
					      <th scope="col"><center>Opsi</center></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  	$no = 1;
					  	$queryPelajaran =mysqli_query($conn, "SELECT * FROM tbl_pelajaran");
					  	while ($data = mysqli_fetch_array($queryPelajaran)) {
					  	?>
					    <tr>
					      <th scope="row"><?= $no++ ?></th>
					      <td><?=$data['tanggal']?></td>
					      <td><?=$data['hari']?></td>
					      <td><?=$data['nis']?></td>
					      <td><?=$data['pelajaran']?></td>
					      <td><?=$data['nilai']?></td>
					      <td align="center">
					      	<a href="pelajaran-edit.php?kode_pelajaran=<?= $data['kode_pelajaran'] ?>" class="btn btn-sm btn-warning" title=" Update Pelajaran"><i class="fa-solid fa-pen"></i></a>
					      	<a href="pelajaran-hapus.php?kode_pelajaran=<?= $data['kode_pelajaran'] ?>" class="btn btn-sm btn-danger" title="Hapus Pelajaran" onclick="return confirm('Anda yakin akan menghapus data ini ?')"><i class="fa-solid fa-trash"></i></a>
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