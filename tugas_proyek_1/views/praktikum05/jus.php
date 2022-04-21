<?php
use Dispenser as GlobalDispenser;

class Dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas = 250;
    Public $namaMinuman;

    public function isi ($vol) {
        $this->volume = $vol;
    }

    public function hargaSegelas($harga) {
        $this->hargaSegelas = $harga;
    }

    public function namaMinum ($nama) {
        $this->namaMinum = $nama;
    }

    public function beli() {
        $this ->volume -= $this->volumeGelas;
        if ($this->volume >= 0) {
            echo "Selamat menikmati minumam $this->namaMinum <br>";
        } else {
            echo "Maaf, minuman $this->namaMinum sudah habis terjual <br>";
        }
    }
}

$title = 'Praktikum05 - Jus';
$menu = 'Praktikum05';
$submenu = 'Jus';
include_once '../templates/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Jus</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Jus</li>
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
							<h3 class="card-title">Jus</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
                            <?php
                                $Jusjeruk = new Dispenser();
                                $Jusjeruk->isi(500);
                                $Jusjeruk->hargaSegelas(4500);
                                $Jusjeruk-> namaMinum = "Aneka Jus Pak Budi";
                                $Jusjeruk->beli();
                                $Jusjeruk->beli();
                                $Jusjeruk->beli();
                                $Jusjeruk->beli();
                                $Jusjeruk->beli();
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