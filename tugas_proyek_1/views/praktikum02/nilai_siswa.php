<?php
    $title = 'Praktikum02 - Nilai Siswa';
    $menu = 'Praktikum02';
    $submenu = 'Form Nilai';
    include_once '../templates/header.php';
?>

<style>
    nav {
        width: 100%;
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Sistem Penilaian</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
						<li class="breadcrumb-item active">Sistem Penilaian</li>
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
							<h3 class="card-title">Detail Nilai</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
                            <?php if (isset($_POST['simpan'])): ?>
                                <ul class="list-group list-group-flush" style="width: 500px;">
                                    <li class="list-group-item">Nama : <?= $_POST['nama'] ?></li>
                                    <li class="list-group-item">Mata Kuliah : <?= $_POST['matkul'] ?></li>
                                    <li class="list-group-item">Nilai UTS : <?= $_POST['uts'] ?></li>
                                    <li class="list-group-item">Nilai UAS : <?= $_POST['uas'] ?></li>
                                    <li class="list-group-item">Nilai Tugas/Praktikum : <?= $_POST['tugas'] ?></li>
                                    <?php $nilai_total = ($_POST['uts'] * 30/100) + ($_POST['uas'] * 35/100) + ($_POST['tugas'] * 35/100) ?>
                                    <li class="list-group-item">Kelulusan : <?= $nilai_total > 55 && $nilai_total <= 100 ? '<span class="badge bg-success">Lulus</span>' : '<span class="badge bg-danger">Tidak Lulus</span>' ?></li>
                                    <?php $grade = '';
                                        if ($nilai_total >= 85 && $nilai_total <= 100) {
                                            $grade = 'A';
                                        } elseif ($nilai_total <= 84 && $nilai_total >= 70) {
                                            $grade = 'B';
                                        } elseif ($nilai_total <= 69 && $nilai_total >= 56) {
                                            $grade = 'C';
                                        } elseif ($nilai_total <= 55 && $nilai_total >= 36) {
                                            $grade = 'D';
                                        } elseif ($nilai_total <= 35 && $nilai_total >= 0) {
                                            $grade = 'E';
                                        } else {
                                            $grade = 'I';
                                        }
                                    ?>
                                    <li class="list-group-item">Grade : <?= $nilai_total > 55 && $nilai_total <= 100 ? "<span class='text-success fw-bold'>$grade</span>" : "<span class='text-danger fw-bold'>$grade</span>" ?></li>
                                    <?php $predikat = '';
                                        switch ($grade) {
                                            case 'A':
                                                $predikat = 'Sangat Memuaskan';
                                                break;
                                            case 'B':
                                                $predikat = 'Memuaskan';
                                                break;
                                            case 'C':
                                                $predikat = 'Cukup';
                                                break;
                                            case 'D':
                                                $predikat = 'Kurang';
                                                break;
                                            case 'E':
                                                $predikat = 'Sangat Kurang';
                                                break;
                                            default:
                                                $predikat = 'Tidak Ada';
                                                break;
                                        }
                                    ?>
                                    <li class="list-group-item">Predikat : <?= $nilai_total > 55 && $nilai_total <= 100 ? "<span class='text-success fw-bold'>$predikat</span>" : "<span class='text-danger fw-bold'>$predikat</span>" ?></li>
                                </ul>
                                <a href="form_nilai.php" class="btn btn-primary mt-2" title="Kembali Ke Form">Kembali</a>
                            <?php endif ?>
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