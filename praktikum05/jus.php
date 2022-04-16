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