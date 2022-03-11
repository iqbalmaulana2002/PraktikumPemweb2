<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Belanja</title>
  </head>
  <body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-3">Belanja Online</h3>
                <form action="" method="POST">
                    <div class="row mb-3">
                        <label for="customer" class="col-sm-3 col-form-label">Customer</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="customer" name="customer" placeholder="Nama Customer" required autocomplete="off">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-3 pt-0">Pilih Produk</legend>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="produk" id="inlineRadio1" value="TV" required>
                                <label class="form-check-label" for="inlineRadio1">TV</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="Kulkas" required>
                                <label class="form-check-label" for="inlineRadio2">Kulkas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="produk" id="inlineRadio3" value="MESIN CUCI" required>
                                <label class="form-check-label" for="inlineRadio3">Mesin Cuci</label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label for="jml" class="col-sm-3 col-form-label">Jumlah</label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="jml" name="jumlah" placeholder="Jumlah" required min="1" autocomplete="off">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <button type="submit" class="btn btn-success" name="proses">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="offset-md-2 col-md-4 text-right">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action" style="background: #3869b1; border-color: #3869b1; color: #FFF;" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Daftar Harga</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">TV : 4.200.000</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Kulkas : 3.100.000</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">MESIN CUCI : 3.800.000</a>
                    <a class="list-group-item list-group-item-action" style="background: #3869b1; border-color: #3869b1; color: #FFF;" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Harga Dapat Berubah Setiap Saat</a>
                </div>
            </div>
        </div>

        <?php if (isset($_POST['proses'])): ?>
            <div class="row mt-5 pt-4">
                <div class="col-12">
                    Nama Customer : <?= $_POST['customer'] ?><br>
                    Produk Pilihan : <?= $_POST['produk'] ?><br>
                    Jumlah Beli : <?= $_POST['jumlah'] ?><br>
                    Total Belanja : Rp. <?= number_format(($_POST['produk'] == 'TV' ? $_POST['jumlah'] * 4200000 : ($_POST['produk'] == 'Kulkas' ? $_POST['jumlah'] * 3100000 : $_POST['jumlah'] * 3800000)), 2, ',', '.') ?><br>
                </div>
            </div>
        <?php endif ?>
    </div>
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