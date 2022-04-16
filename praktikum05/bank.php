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