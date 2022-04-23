<?php
    $title = 'Praktikum03 - Home';
    $menu = 'Praktikum03';
    $submenu = 'Home';
    include_once '../templates/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Latihan Membuat Template</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
						<li class="breadcrumb-item active">Home</li>
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
							<h3 class="card-title">Latihan membuat template</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
                            <?php include_once 'atas.php' ?>
                                <h1>Welcome Home !!! </h1>
                            <?php require_once 'bawah.php' ?>
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