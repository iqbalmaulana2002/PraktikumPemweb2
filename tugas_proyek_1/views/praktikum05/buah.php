<?php

class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name=$name;
        $this->color=$color;
    }

    public function intro(){
        echo "The fruit is $this->name and color is $this->color <br>";
    }
}

class Strawberry extends Fruit {
    public function message(){
        echo "Am I a fruit or a berry ? <br>";
    }
}

$title = 'Praktikum05 - Buah';
$menu = 'Praktikum05';
$submenu = 'Buah';
include_once '../templates/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Buah</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
						<li class="breadcrumb-item active">Buah</li>
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
							<h3 class="card-title">Buah</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
                            <?php
                                $strawberry = new Strawberry("Strawberry", "red");
                                $strawberry->message();
                                $strawberry->intro();
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