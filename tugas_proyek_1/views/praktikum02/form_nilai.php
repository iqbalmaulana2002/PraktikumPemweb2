<?php
    $title = 'Praktikum02 - Form Nilai';
    $menu = 'Praktikum02';
    $submenu = 'Form Nilai';
    include_once '../templates/header.php';
?>

<style>
    .invalid-feedback {
        font-size: 12px;
    }

    nav {
        width: 100%;
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Sistem Penilaian</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
						<li class="breadcrumb-item active">Sistem Penilaian</li>
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
							<h3 class="card-title">Form Nilai</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
                            <div class="row justify-content-center mb-5">
                                <div class="col-sm-12 col-md-9">
                                    <form id="form_nilai" action="nilai_siswa.php" method="POST">
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-md-3 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-7 col-md-9">
                                                <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap"  autocomplete="off">
                                                <div class="invalid-feedback">Nama Lengkan harus diisi</div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-md-3 col-form-label">Mata Kuliah</label>
                                            <div class="col-sm-7 col-md-9">
                                                <select class="form-control" name="matkul" >
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
                                                <input type="text" class="number form-control" name="uts" placeholder="Nilai UTS"  autocomplete="off">
                                                <div class="invalid-feedback">Nilai UTS harus diisi</div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-md-3 col-form-label">Nilai UAS</label>
                                            <div class="col-sm-7 col-md-9">
                                                <input type="text" class="number form-control" name="uas" placeholder="Nilai UAS"  autocomplete="off">
                                                <div class="invalid-feedback">Nilai UAS harus diisi</div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-5 col-md-3 col-form-label">Nilai Tugas/Praktikum</label>
                                            <div class="col-sm-7 col-md-9">
                                                <input type="text" class="number form-control" name="tugas" placeholder="Nilai Tugas"  autocomplete="off">
                                                <div class="invalid-feedback">Nilai Tugas/Praktikum harus diisi</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-7 col-md-9 offset-sm-5 offset-md-3">
                                                <button type="button" class="btn btn-primary disabled" name="simpan" value="Submit" title="Simpan Nilai">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

<script>
(function() {
    const form = document.querySelector('#form_nilai')
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
            document.querySelector('button[name="simpan"]').type = 'submit'
            document.querySelector('button[name="simpan"]').classList.remove('disabled')
        } else {
            document.querySelector('button[name="simpan"]').type = 'button'
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
})();
</script>

<?php include_once '../templates/footer.php' ?>