<?php

session_start();
require_once "../koneksi.php";

$title = "Kesehatan Santri - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";


?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"> Kesehatan Santri</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item active">Kesehatan Santri</li>
                </ol>
                <div class="card">
				  <div class="card-header">
				    <span class="h5 my-2"><i class="fa-solid fa-list"></i> Data Kesehatan Santri</span>
				    <a href="kesehatan-tambah.php" class= "btn btn-primary float-end"><i class="fa-solid fa-plus"></i> Tambah Kesehatan</a>
				  </div>
				  <div class="card-body">
				    <table class="table table-hover" id="datatablesSimple">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col"><center>Tanggal</center></th>
					      <th scope="col"><center>Nama Lengkap</center></th>
					      <th scope="col"><center>Pemeriksaan/Diagnosa</center></th>
					      <th scope="col"><center>Pengobatan/Tindakan</center></th>
					      <th scope="col"><center>Edit</center></th>
					      <th scope="col"><center>Hapus</center></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  	$no = 1;
					  	$queryKesehatan =mysqli_query($conn, "SELECT * FROM tbl_kesehatan");
					  	while ($data = mysqli_fetch_array($queryKesehatan)) {
					  	?>
					    <tr>
					      <th scope="row"><?= $no++ ?></th>
					      <td><?=$data['tanggal']?></td>
					      <td><?=$data['nis']?></td>
					      <td><?=$data['diagnosa']?></td>
					      <td><?=$data['pengobatan']?></td>
					      <td align="center">
					      	<a href="kesehatan-edit.php?kode_kesehatan=<?= $data['kode_kesehatan'] ?>" class="btn btn-sm btn-warning" title=" Update Kesehatan"><i class="fa-solid fa-pen"></i></a>
					      </td>
					      <td>
					      	<a href="kesehatan-hapus.php?kode_kesehatan=<?= $data['kode_kesehatan'] ?>" class="btn btn-sm btn-danger" title="Hapus Kesehatan" onclick="return confirm('Anda yakin akan menghapus data ini ?')"><i class="fa-solid fa-trash"></i></a>
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