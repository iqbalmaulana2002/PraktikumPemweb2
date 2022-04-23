<?php
    $ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
    $ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
    $ns3 = ['id' => 3, 'nim' => '01130', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
    $ns4 = ['id' => 4, 'nim' => '01134', 'uts' => 90, 'uas' => 91, 'tugas' => 82];

    $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

    $title = 'Praktikum01 - Array Siswa';
    $menu = 'Praktikum01';
    include_once '../templates/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Array Siswa</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
						<li class="breadcrumb-item active">Array Siswa</li>
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
							<h3 class="card-title">Data Array Siswa</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
                            <table id="example2" class="table table-hover">
                                <thead class="bg-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">NIM</th>
                                        <th scope="col">UTS</th>
                                        <th scope="col">UAS</th>
                                        <th scope="col">Tugas</th>
                                        <th scope="col">Nilai Akhir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ar_nilai as $i => $value): ?>
                                        <tr>
                                            <th scope="row"><?= ++$i ?></th>
                                            <td><?= $value["nim"] ?></td>
                                            <td><?= $value["uts"] ?></td>
                                            <td><?= $value["uas"] ?></td>
                                            <td><?= $value["tugas"] ?></td>
                                            <td><?= number_format(($value['uts'] + $value['uas'] + $value['tugas']) / 3, 2, ',', '.') ?></td>
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