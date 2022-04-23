<?php
require_once './class_account.php';

class AccountBank extends Account
{
    public function doTransfer($destination, $uangTranfer)
    {
        Account::withdraw($uangTranfer, false);
        $destination->deposit($uangTranfer, false);

        echo "Transfer sejumlah " .  number_format($uangTranfer, 2, ',', '.') . " dari $this->nama - $this->nomor ke $destination->nama - $destination->nomor sukses! </br>";
    }
}

$title = 'Praktikum05 - Bank';
$menu = 'Praktikum05';
$submenu = 'Bank';
include_once '../templates/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Bank</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
						<li class="breadcrumb-item active">Bank</li>
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
							<h3 class="card-title">Bank</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
                            <?php
                                $iqbal = new AccountBank('ABC0000', 'Iqbal', 10000000);
                                $roberts = new AccountBank('ABC0001', 'Roberts', 90000);
                                $messi = new AccountBank('ABC0002', 'Messi', 999999999);

                                $iqbal->deposit(1000000);
                                $iqbal->cetak();

                                $iqbal->doTransfer($roberts, 1000000);
                                $iqbal->cetak();

                                $iqbal->doTransfer($messi, 500000);
                                $iqbal->cetak();

                                $roberts->cetak();
                                $messi->cetak();
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