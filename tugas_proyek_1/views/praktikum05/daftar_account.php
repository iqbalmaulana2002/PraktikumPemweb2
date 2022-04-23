<?php
    require_once './class_account.php';
    $title = 'Praktikum05 - Daftar Account';
    $menu = 'Praktikum05';
    $submenu = 'Daftar Account';
    include_once '../templates/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Daftar Account</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
						<li class="breadcrumb-item active">Daftar Account</li>
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
							<h3 class="card-title">Account</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Accouunt</th>
                                        <th>Pemilik</th>
                                        <th>Saldo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i = 1;
                                        $arrAccount = [
                                            new Account('ABC0001', 'Iqbal', 7500000),
                                            new Account('ABC0002', 'Roberts', 950000),
                                            new Account('ABC0001', 'Messi', 540000)
                                        ];
                                        foreach ($arrAccount as $valueAccount):
                                    ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $valueAccount->getProperties('nomor'); ?></td>
                                            <td><?= $valueAccount->getProperties('nama'); ?></td>
                                            <td><?= number_format($valueAccount->getProperties('saldo'), 2, ',', '.'); ?></td>
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