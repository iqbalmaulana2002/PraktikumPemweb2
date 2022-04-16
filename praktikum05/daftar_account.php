<?php require_once './class_account.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Account</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>No. Accouunt</th>
                <th>Pemilik</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $i = 1;
                $arrAccount = [
                    new Account('ABC0001', 'Iqbal', 7500000),
                    new Account('ABC0002', 'Roberts', 950000),
                    new Account('ABC0001', 'Messi', 540000)
                ];
                foreach ($arrAccount as $valueAccount):
            ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $valueAccount->getProperties('nomor'); ?></td>
                    <td><?= $valueAccount->getProperties('nama'); ?></td>
                    <td><?= number_format($valueAccount->getProperties('saldo'), 2, ',', '.'); ?></td>
                </tr>
            <?php
                $i++;
                endforeach;
            ?>
        </tbody>
    </table>
</body>
</html>