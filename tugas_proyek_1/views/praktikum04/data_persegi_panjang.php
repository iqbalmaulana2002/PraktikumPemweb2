<?php
    require_once 'class_persegi_panjang.php';
    $title = 'Praktikum04 - Data Persegi Panjang';
    $menu = 'Praktikum04';
    $submenu = 'Data Persegi Panjang';
    include_once '../templates/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Persegi Panjang</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
						<li class="breadcrumb-item active">Data Persegi Panjang</li>
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
							<h3 class="card-title">Persegi Panjang</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
                            <?php
                                $persegiPanjang1 = new PersegiPanjang(10, 10);
                                $persegiPanjang2 = new PersegiPanjang(20, 20);

                                echo "<br>Luas Persegi Panjang I : ". $persegiPanjang1->getLuas();
                                echo "<br>Luas Persegi Panjang II : ". $persegiPanjang2->getLuas();

                                echo "<br>Keliling Persegi Panjang I : ". $persegiPanjang1->getKeliling();
                                echo "<br>Keliling Persegi Panjang II : ". $persegiPanjang2->getKeliling();
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