<?php

session_start();
require_once "../koneksi.php";

$title = "Nilai Konversi - PESANTREN MAQ";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";


?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"> Nilai Konversi</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item "><a href="home.php"> Home</a></li>
                    <li class="breadcrumb-item active">Nilai</li>
                </ol>
                <div class="card">
                  <div class="card-header">
                    <span class="h5 my-2"><i class="fa-solid fa-list"></i> Data Nilai</span>
                    <a href="nilai-tambah.php" class= "btn btn-primary float-end"><i class="fa-solid fa-plus"></i> Tambah Nilai</a>
                  </div>
                  <div class="card-body">
                    <table class="table table-hover" id="datatablesSimple">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col"><center>Kode Nilai</center></th>
                          <th scope="col"><center>Nama Lengkap</center></th>
                          <th scope="col"><center>Nilai</center></th>
                          <th scope="col"><center>Konversi</center></th>
                          <th scope="col"><center>Kesalahan</center></th>
                          <th scope="col"><center>Keterangan</center></th>
                          <th scope="col"><center>Edit</center></th>
                          <th scope="col"><center>Hapus</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        $queryNilai =mysqli_query($conn, "SELECT * FROM tbl_nilai");
                        while ($data = mysqli_fetch_array($queryNilai)) {
                        ?>
                        <tr>
                          <th scope="row"><?= $no++ ?></th>
                          <td><?=$data['kode_nilai']?></td>
                          <td><?=$data['nis']?></td>
                          <td><?=$data['nilai']?></td>
                          <td><?=$data['konversi']?></td>
                          <td><?=$data['kesalahan']?></td>
                          <td><?=$data['keterangan']?></td>
                          <td align="center">
                            <a href="nilai-edit.php?kode_nilai=<?= $data['kode_nilai'] ?>" class="btn btn-sm btn-warning" title=" Update Nilai"><i class="fa-solid fa-pen"></i></a>
                          </td>
                          <td>
                            <a href="nilai-hapus.php?kode_nilai=<?= $data['kode_nilai'] ?>" class="btn btn-sm btn-danger" title="Hapus Nilai" onclick="return confirm('Anda yakin akan menghapus data ini ?')"><i class="fa-solid fa-trash"></i></a>
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