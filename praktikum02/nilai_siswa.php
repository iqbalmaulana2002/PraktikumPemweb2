<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Nilai</title>

    <style>
        nav {
            width: 100%;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistem Penilaian</a>
        </div>
    </nav>

    <div class="container" style="margin-bottom: 300px;">
        <?php if (isset($_POST['simpan'])): ?>
            <ul class="list-group list-group-flush" style="width: 500px;">
                <li class="list-group-item">Nama : <?= $_POST['nama'] ?></li>
                <li class="list-group-item">Mata Kuliah : <?= $_POST['matkul'] ?></li>
                <li class="list-group-item">Nilai UTS : <?= $_POST['uts'] ?></li>
                <li class="list-group-item">Nilai UAS : <?= $_POST['uas'] ?></li>
                <li class="list-group-item">Nilai Tugas/Praktikum : <?= $_POST['tugas'] ?></li>
                <?php $nilai_total = ($_POST['uts'] * 30/100) + ($_POST['uas'] * 35/100) + ($_POST['tugas'] * 35/100) ?>
                <li class="list-group-item">Kelulusan : <?= $nilai_total > 55 ? '<span class="badge bg-success">Lulus</span>' : '<span class="badge bg-danger">Tidak Lulus</span>' ?></li>
                <?php $grade = '';
                    if ($nilai_total >= 85 && $nilai_total <= 100) {
                        $grade = 'A';
                    } elseif ($nilai_total <= 84 && $nilai_total >= 70) {
                        $grade = 'B';
                    } elseif ($nilai_total <= 69 && $nilai_total >= 56) {
                        $grade = 'C';
                    } elseif ($nilai_total <= 55 && $nilai_total >= 36) {
                        $grade = 'D';
                    } elseif ($nilai_total <= 35 && $nilai_total >= 0) {
                        $grade = 'E';
                    } else {
                        $grade = 'I';
                    }
                ?>
                <li class="list-group-item">Grade : <?= $nilai_total > 55 ? "<span class='text-success fw-bold'>$grade</span>" : "<span class='text-danger fw-bold'>$grade</span>" ?></li>
                <?php $predikat = '';
                    switch ($grade) {
                        case 'A':
                            $predikat = 'Sangat Memuaskan';
                            break;
                        case 'B':
                            $predikat = 'Memuaskan';
                            break;
                        case 'C':
                            $predikat = 'Cukup';
                            break;
                        case 'D':
                            $predikat = 'Kurang';
                            break;
                        case 'E':
                            $predikat = 'Sangat Kurang';
                            break;
                        default:
                            $predikat = 'Tidak Ada';
                            break;
                    }
                ?>
                <li class="list-group-item">Predikat : <?= $nilai_total > 55 ? "<span class='text-success fw-bold'>$predikat</span>" : "<span class='text-danger fw-bold'>$predikat</span>" ?></li>
            </ul>
            <a href="form_nilai.php" class="btn btn-primary mt-2" title="Kembali Ke Form">Kembali</a>
        <?php endif ?>
    </div>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <span class="small">Developed By © Iqbal Maulana</span>
        </div>
    </nav>
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