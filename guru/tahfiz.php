<?php

session_start();
require_once "../koneksi.php";

$title = "Tahfiz - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";


?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"> Tahfiz</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item active">Tahfiz</li>
                </ol>
                <div class="card">
				  <div class="card-header">
				    <span class="h5 my-2"><i class="fa-solid fa-list"></i> Data Tahfiz</span>
				    <a href="tahfiz-tambah.php" class= "btn btn-primary float-end"><i class="fa-solid fa-plus"></i> Tambah Tahfiz</a>
				  </div>
				  <div class="card-body">
				    <table class="table table-hover" id="datatablesSimple">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col"><center>Tanggal</center></th>
					      <th scope="col"><center>Hari</center></th>
					      <th scope="col"><center>Nama Lengkap</center></th>
					      <th scope="col"><center>Surah 1</center></th>
					      <th scope="col"><center>Ayat 1</center></th>
					      <th scope="col"><center>Surah 2</center></th>
					      <th scope="col"><center>Ayat 2</center></th>
					      <th scope="col"><center>Surah 3</center></th>
					      <th scope="col"><center>Ayat 3</center></th>
					      <th scope="col"><center>Jumlah Baris</center></th>
					      <th scope="col"><center>Nilai</center></th>
					      <th scope="col"><center>Edit</center></th>
					      <th scope="col"><center>Hapus</center></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  	$no = 1;
					  	$queryTahfiz =mysqli_query($conn, "SELECT * FROM tbl_tahfiz");
					  	while ($data = mysqli_fetch_array($queryTahfiz)) {
					  	?>
					    <tr>
					      <th scope="row"><?= $no++ ?></th>
					      <td><?=$data['tanggal']?></td>
					      <td><?=$data['hari']?></td>
					      <td><?=$data['nis']?></td>
					      <td><?=$data['surah1']?></td>
					      <td><?=$data['ayat1']?></td>
					      <td><?=$data['surah2']?></td>
					      <td><?=$data['ayat2']?></td>
					      <td><?=$data['surah3']?></td>
					      <td><?=$data['ayat3']?></td>
					      <td><?=$data['jumlah']?></td>
					      <td><?=$data['nilai']?></td>
					      <td align="center">
					      	<a href="tahfiz-edit.php?kode_tahfiz=<?= $data['kode_tahfiz'] ?>" class="btn btn-sm btn-warning" title=" Update Tahfiz"><i class="fa-solid fa-pen"></i></a>
					      </td>
					      <td>
					      	<a href="tahfiz-hapus.php?kode_tahfiz=<?= $data['kode_tahfiz'] ?>" class="btn btn-sm btn-danger" title="Hapus Tahfiz" onclick="return confirm('Anda yakin akan menghapus data ini ?')"><i class="fa-solid fa-trash"></i></a>
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