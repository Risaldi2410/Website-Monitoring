<?php

session_start();
require_once "../koneksi.php";

$title = "Ibadah Santri - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";


?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"> Ibadah Santri</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item active">Ibadah Santri</li>
                </ol>
                <div class="card">
				  <div class="card-header">
				    <span class="h5 my-2"><i class="fa-solid fa-list"></i> Data Ibadah Santri</span>
				    <a href="ibadah-tambah.php" class= "btn btn-primary float-end"><i class="fa-solid fa-plus"></i> Tambah Ibadah</a>
				  </div>
				  <div class="card-body">
				    <table class="table table-hover" id="datatablesSimple">
					  <thead>
					    <tr>
					      <th scope="col">No</th>
					      <th scope="col"><center>Tanggal</center></th>
					      <th scope="col"><center>Hari</center></th>
					      <th scope="col"><center>Nama Lengkap</center></th>
					      <th scope="col"><center>Tahajjud</center></th>
					      <th scope="col"><center>Subuh</center></th>
					      <th scope="col"><center>Dhuha</center></th>
					      <th scope="col"><center>Dzuhur</center></th>
					      <th scope="col"><center>Ashar</center></th>
					      <th scope="col"><center>Magrib</center></th>
					      <th scope="col"><center>Isya</center></th>
					      <th scope="col"><center>Puasa Sunnah</center></th>
					      <th scope="col"><center>Edit</center></th>
					      <th scope="col"><center>Hapus</center></th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  	$no = 1;
					  	$queryIbadah =mysqli_query($conn, "SELECT * FROM tbl_ibadah");
					  	while ($data = mysqli_fetch_array($queryIbadah)) {
					  	?>
					    <tr>
					      <th scope="row"><?= $no++ ?></th>
					      <td><?=$data['tanggal']?></td>
					      <td><?=$data['hari']?></td>
					      <td><?=$data['nis']?></td>
					      <td><?=$data['tahajud']?></td>
					      <td><?=$data['subuh']?></td>
					      <td><?=$data['duha']?></td>
					      <td><?=$data['zuhur']?></td>
					      <td><?=$data['ashar']?></td>
					      <td><?=$data['magrib']?></td>
					      <td><?=$data['isya']?></td>
					      <td><?=$data['puasa']?></td>
					      <td align="center">
					      	<a href="ibadah-edit.php?kode_ibadah=<?= $data['kode_ibadah'] ?>" class="btn btn-sm btn-warning" title=" Update Ibadah"><i class="fa-solid fa-pen"></i></a>
					      </td>
					      <td>
					      	<a href="ibadah-hapus.php?kode_ibadah=<?= $data['kode_ibadah'] ?>" class="btn btn-sm btn-danger" title="Hapus Ibadah" onclick="return confirm('Anda yakin akan menghapus data ini ?')"><i class="fa-solid fa-trash"></i></a>
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