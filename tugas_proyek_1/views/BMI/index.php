<?php

require_once '../../application/Pasien.php';
require_once '../../application/Bmi.php';
require_once '../../application/Bmipasien.php';

$title = 'BMI';
$menu = 'BMI';
include_once '../templates/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">BMI Pasien</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
						<li class="breadcrumb-item active">BMI Pasien</li>
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
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#tambahPasienModal">
						Tambah Pasien
					</button>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Data BMI Pasien</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example2" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal Periksa</th>
										<th>Kode Pasien</th>
										<th>Nama Pasien</th>
										<th>Gender</th>
										<th>Berat (kg)</th>
										<th>Tinggi (cm)</th>
										<th>Nilai BMI</th>
										<th>Status BMI</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$pasien1 = new Pasien('P001', 'Ahmad', 'Jakarta', '2000-08-28', 'ahmad123@gmail.com', 'L');
									$bmi1 = new Bmi(69.8, 169);

									$pasien2 = new Pasien('P002', 'Rina', 'Bogor', '1994-03-02', 'rina123@gmail.com', 'P');
									$bmi2 = new Bmi(55.3, 165);

									$pasien3 = new Pasien('P003', 'Lutfi', 'Depok', '1997-11-22', 'lutfi123@gmail.com', 'L');
									$bmi3 = new Bmi(45.2, 171);

									$data = [new Bmipasien($pasien1, $bmi1), new Bmipasien($pasien2, $bmi2), new Bmipasien($pasien3, $bmi3)];

									// Jika ada pasien yang baru ditambahkan
									if (isset($_POST['tambahPasien'])) {
										$pasien4 = new Pasien('P004', $_POST['nama'], $_POST['tmp_lahir'], $_POST['tgl_lahir'], $_POST['email'], $_POST['gender']);
										$bmi4 = new Bmi($_POST['berat'], $_POST['tinggi']);
										array_push($data, new Bmipasien($pasien4, $bmi4));
									}
									?>
									<?php foreach ($data as $key => $value) : ?>
										<tr>
											<td><?= ++$key ?></td>
											<td><?= $value->getData('tanggal') ?></td>
											<td><?= $value->getData()['pasien']['kode'] ?></td>
											<td><?= $value->getData()['pasien']['nama'] ?></td>
											<td><?= $value->getData()['pasien']['gender'] ?></td>
											<td><?= $value->getData()['bmi']['berat'] ?></td>
											<td><?= $value->getData()['bmi']['tinggi'] ?></td>
											<td><?= $value->getData('bmi')->nilaiBMI() ?></td>
											<td><?= $value->getData('bmi')->statusBMI() ?></td>
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

<!-- tambahPasienModal -->
<div class="modal fade" id="tambahPasienModal" tabindex="-1" aria-labelledby="tambahPasienModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="tambahPasienModalLabel">Tambah Pasien</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post" action="">
				<div class="modal-body">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda" required>
					</div>
					<div class="form-group">
						<label for="tmp_lahir">Tempat Lahir</label>
						<input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan tempat lahir anda" required>
					</div>
					<div class="form-group">
						<label for="tgl_lahir">Tanggal Lahir</label>
						<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan tanggal_lahir anda" required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email anda" required>
					</div>
					<div class="form-group">
						<label for="email">Gender</label><br>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="l" name="gender" value="L" class="custom-control-input" required>
							<label class="custom-control-label" for="l">L</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input type="radio" id="p" name="gender" value="P" class="custom-control-input" required>
							<label class="custom-control-label" for="p">P</label>
						</div>
					</div>
					<div class="form-group">
						<label for="berat">Berat (kg)</label>
						<input type="text" class="form-control" id="berat" name="berat" placeholder="Masukkan berat anda" required>
					</div>
					<div class="form-group">
						<label for="tinggi">Tingg (cm)</label>
						<input type="text" class="form-control" id="tinggi" name="tinggi" placeholder="Masukkan tinggi anda" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary" name="tambahPasien">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="showInformationBMIModal" tabindex="-1" aria-labelledby="showInformationBMIModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title font-weight-bold" id="showInformationBMIModalLabel">BMI Anda</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="text-center font-weight-bold" style="font-size: 23px;">
					BMI Anda adalah <span class="text-primary" id="bmiPasien"></span>
				</div>
				<div class="row justify-content-center">
					<div class="col text-center" style="opacity: 0.35;">
						<img src="../../assets/kurus.jpg" alt="image" id="kurus"><br>
						<span style="font-size: 12px; font-weight: bold;">Kekurangan Bobot<br/>< 18,5</span>
					</div>
					<div class="col text-center" style="opacity: 0.35;">
						<img src="../../assets/normal.jpg" alt="image" id="normal"><br>
						<span style="font-size: 12px; font-weight: bold;">Sehat<br/>18,5 - 23,9</span>
					</div>
					<div class="col text-center" style="opacity: 0.35;">
						<img src="../../assets/kegemukan.jpg" alt="image" id="gemuk"><br>
						<span style="font-size: 12px; font-weight: bold;">Kelebihan Bobot<br/>24 - 26,9</span>
					</div>
					<div class="col text-center" style="opacity: 0.35;">
						<img src="../../assets/obesitas 1.jpg" alt="image" id="obesitas1"><br>
						<span style="font-size: 12px; font-weight: bold;">Kelebihan Bobot<br/>27 - 29,9</span>
					</div>
					<div class="col text-center" style="opacity: 0.35;">
						<img src="../../assets/obesitas 2.jpg" alt="image" id="obesitas2"><br>
						<span style="font-size: 12px; font-weight: bold;">Kelebihan Bobot<br/>> 30</span>
					</div>
				</div>
			</div>
			<div class="modal-footer"></div>
		</div>
	</div>
</div>

<?php
	include_once '../templates/footer.php';
	$is_submit = isset($_POST['tambahPasien']) ? 'true' : 'false';
?>

<script>
	$(function() {
		document.getElementById('berat').addEventListener('input', e => {
			if (! /^[0-9]*$/.test(e.target.value)) {
				e.target.value = e.target.value.replace(/[a-z]/gi, '')
			} else {}

			if (e.target.value.includes('e')) {
				e.target.value = e.target.value.replace('e', '')
			}

			if (onPasteNumber) {
				if (/[a-z]/gi.test(copiedText)) {
					e.target.value = ''
					onPasteNumber = false
				} else {}
			}
		})

		if (<?= $is_submit ?>) {
			let bmi = Number('<?= $data[3]->getData('bmi')->nilaiBMI() ?>')
			if (bmi < 18.5) {
				$('#kurus').parent().css('opacity', 1)
			} else if (bmi < 24) {
				$('#normal').parent().css('opacity', 1)
			} else if (bmi < 27) {
				$('#gemuk').parent().css('opacity', 1)
			} else if (bmi < 30) {
				$('#obesitas1').parent().css('opacity', 1)
			} else {
				$('#obesitas2').parent().css('opacity', 1)
			}
			$('#bmiPasien').html(<?= $data[3]->getData('bmi')->nilaiBMI() ?>)
			$('#showInformationBMIModal').modal('show')
		}
	})
</script>