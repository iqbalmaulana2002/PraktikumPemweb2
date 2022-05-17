<div class="col-md-12">
    <h3>Daftar Dosen</h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 1;
                foreach ($all_dosen as $dosen): ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $dosen->nidn ?></td>
                        <td><?= $dosen->nama ?></td>
                        <td><?= $dosen->gender ?></td>
                        <td><?= $dosen->tgl_lahir ?></td>
                        <td><?= $dosen->tmp_lahir ?></td>
                        <td><?= $dosen->pendidikan ?></td>
                    </tr>
                <?php
                    $nomor++;
                    endforeach ?>
        </tbody>
    </table>
</div>