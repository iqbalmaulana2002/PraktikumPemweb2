<?php
require_once "class_mahasiswa.php";

$mahasiswa1 = new Mahasiswa('0110221001', 'Budi', '2021', 'Teknik Informatika', 3.8);
$mahasiswa2 = new Mahasiswa('0110221002', 'Dodo', '2020', 'Teknik Informatika', 3.2);
$mahasiswa3 = new Mahasiswa('0110221003', 'Jenniper', '2021', 'Sistem Informasi', 3.97);
$mahasiswa4 = new Mahasiswa('0110221004', 'Mikel', '2021', 'Sistem Informasi', 1.98);
$mahasiswa5 = new Mahasiswa('0110221005', 'Mawar', '2020', 'Teknik Informatika', 2.5);
$mahasiswas = [$mahasiswa1, $mahasiswa2, $mahasiswa3, $mahasiswa4, $mahasiswa5];

$title = 'Praktikum04 - Data Mahasiswa';
$menu = 'Praktikum04';
$submenu = 'Daftar Mahasiswa';
include_once '../templates/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Mahasiswa</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
						<li class="breadcrumb-item active">Data Mahasiswa</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Daftar Mahasiswa</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="table">
								<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">NIM</th>
										<th scope="col">Nama</th>
										<th scope="col">Prodi</th>
										<th scope="col">Thn Angkatan</th>
										<th scope="col">IPK</th>
										<th scope="col">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1;
										foreach ($mahasiswas as $mahasiswa): ?>
										<tr>
											<th scope="row"><?= $no++ ?></th>
											<td><?= $mahasiswa->nim ?></td>
											<td><?= $mahasiswa->nama ?></td>
											<td><?= $mahasiswa->thn_angkatan ?></td>
											<td><?= $mahasiswa->prodi ?></td>
											<td><?= $mahasiswa->ipk ?></td>
											<td>
												<a href="#" class="btn btn-primary"><i class="fas fa-search-plus"></i> Detail</a>
											</td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include_once '../templates/footer.php' ?>