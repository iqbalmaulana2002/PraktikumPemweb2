<?php
    require_once 'class_lingkaran.php';
    $title = 'Praktikum04 - Data Lingkaran';
    $menu = 'Praktikum04';
    $submenu = 'Data Lingkaran';
    include_once '../templates/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Lingkaran</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
						<li class="breadcrumb-item active">Data Lingkaran</li>
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
							<h3 class="card-title">Lingkaran</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
                            <?php
                                echo "Nilai PHI ". Lingkaran::PHI;
                                $lingkar1 = new Lingkaran(10);
                                $lingkar2 = new Lingkaran(4);

                                echo "<br>Luas Lingkaran I : ". $lingkar1->getLuas();
                                echo "<br>Luas Lingkaran II : ". $lingkar2->getLuas();

                                echo "<br>Keliling Lingkaran I : ". $lingkar1->getKeliling();
                                echo "<br>Keliling Lingkaran II : ". $lingkar2->getKeliling();
                            ?>
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