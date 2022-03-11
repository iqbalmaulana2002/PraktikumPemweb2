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
        .invalid-feedback {
            font-size: 12px;
        }

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

    <div class="container" style="margin-bottom: 369px;">
        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-9">
                <form action="nilai_siswa.php" method="POST">
                    <div class="row mb-3">
                        <label class="col-sm-5 col-md-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-7 col-md-9">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required autocomplete="off">
                            <div class="invalid-feedback">Nama Lengkan harus diisi</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-5 col-md-3 col-form-label">Mata Kuliah</label>
                        <div class="col-sm-7 col-md-9">
                            <select class="form-select" name="matkul" required>
                                <option selected disabled value="">-- Pilih Mata Kuliah --</option>
                                <option>Pemrograman WEB 2</option>
                                <option>Jaringan Komputer</option>
                                <option>Basis Data</option>
                            </select>
                            <div class="invalid-feedback">Mata Kuliah harus dipilih</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-5 col-md-3 col-form-label">Nilai UTS</label>
                        <div class="col-sm-7 col-md-9">
                            <input type="text" class="number form-control" name="uts" placeholder="Nilai UTS" required autocomplete="off">
                            <div class="invalid-feedback">Nilai UTS harus diisi</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-5 col-md-3 col-form-label">Nilai UAS</label>
                        <div class="col-sm-7 col-md-9">
                            <input type="text" class="number form-control" name="uas" placeholder="Nilai UAS" required autocomplete="off">
                            <div class="invalid-feedback">Nilai UAS harus diisi</div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-5 col-md-3 col-form-label">Nilai Tugas/Praktikum</label>
                        <div class="col-sm-7 col-md-9">
                            <input type="text" class="number form-control" name="tugas" placeholder="Nilai Tugas" required autocomplete="off">
                            <div class="invalid-feedback">Nilai Tugas/Praktikum harus diisi</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7 col-md-9 offset-sm-5 offset-md-3">
                            <button type="submit" class="btn btn-primary disabled" name="simpan" value="Submit" title="Simpan Nilai">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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

    <script>
        const form = document.querySelector('form')
        form.addEventListener('input', e => {
            if (e.target.className.includes('number')) {
                if (e.target.value == '') {
                    e.target.classList.add('is-invalid')
                    e.target.classList.remove('is-valid')
                    e.target.nextElementSibling.style.display = ''
                } else {
                    if (! /^[0-9]*$/.test(e.target.value)) {
                        e.target.value = e.target.value.replace(/[a-z]/gi, '')
                    } else {
                        e.target.classList.remove('is-invalid')
                        e.target.classList.add('is-valid')
                    }

                    if (e.target.value.includes('e')) {
                        e.target.value = e.target.value.replace('e', '')
                        e.target.classList.add('is-valid')
                    }

                    if (onPasteNumber) {
                        if (/[a-z]/gi.test(copiedText)) {
                            e.target.value = ''
                            e.target.classList.add('is-invalid')
                            e.target.classList.remove('is-valid')
                            onPasteNumber = false
                        } else {
                            e.target.classList.remove('is-invalid')
                            e.target.classList.add('is-valid')
                        }
                    }
                }
            } else {
                if (e.target.value == '') {
                    e.target.classList.remove('is-valid')
                    e.target.classList.add('is-invalid')
                    e.target.nextElementSibling.style.display = ''
                } else {
                    e.target.classList.remove('is-invalid')
                    e.target.classList.add('is-valid')
                    e.target.nextElementSibling.style.display = ''
                }
            }

            let canSubmit = true
            for (const formEl of form.elements) {
                if (formEl.value == '') {
                    canSubmit = false
                }
            }

            if (canSubmit) {
                document.querySelector('button[name="simpan"]').classList.remove('disabled')
            } else {
                document.querySelector('button[name="simpan"]').classList.add('disabled')
            }
        })

        let copiedText = ''
        document.addEventListener('copy', e => copiedText = e.target.value)
        document.addEventListener('cut', e => copiedText = e.target.value)
        let onPasteNumber = false
        document.addEventListener('paste', e => {
            if (e.target.className.includes('number')) {
                onPasteNumber = true
            }
        })
    </script>
  </body>
</html>