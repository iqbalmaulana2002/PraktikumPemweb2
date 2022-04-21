<?php
require_once "class_mahasiswa.php";

$mahasiswa1 = new Mahasiswa('0110221001', 'Budi', '2021', 'Teknik Informatika', 3.8);
$mahasiswa2 = new Mahasiswa('0110221002', 'Dodo', '2020', 'Teknik Informatika', 3.2);
$mahasiswa3 = new Mahasiswa('0110221003', 'Jenniper', '2021', 'Sistem Informasi', 3.97);
$mahasiswa4 = new Mahasiswa('0110221004', 'Mikel', '2021', 'Sistem Informasi', 1.98);
$mahasiswa5 = new Mahasiswa('0110221005', 'Mawar', '2020', 'Teknik Informatika', 2.5);
$mahasiswas = [$mahasiswa1, $mahasiswa2, $mahasiswa3, $mahasiswa4, $mahasiswa5];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Prodi</th>
                <th scope="col">Thn Angkatan</th>
                <th scope="col">IPK</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
                foreach ($mahasiswas as $mahasiswa): ?>
                <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $mahasiswa->nim ?></td>
                    <td><?= $mahasiswa->nama ?></td>
                    <td><?= $mahasiswa->thn_angkatan ?></td>
                    <td><?= $mahasiswa->prodi ?></td>
                    <td><?= $mahasiswa->ipk ?></td>
                    <td>
                      <a href="#" class="btn btn-primary"><i class="fas fa-search-plus"></i> Detail</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>