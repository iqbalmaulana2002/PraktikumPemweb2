<?php

require_once 'class_persegi_panjang.php';

$persegiPanjang1 = new PersegiPanjang(10, 10);
$persegiPanjang2 = new PersegiPanjang(20, 20);

echo "<br>Luas Persegi Panjang I ". $persegiPanjang1->getLuas();
echo "<br>Luas Persegi Panjang II ". $persegiPanjang2->getLuas();

echo "<br>Keliling Persegi Panjang I ". $persegiPanjang1->getKeliling();
echo "<br>Keliling Persegi Panjang II ". $persegiPanjang2->getKeliling();