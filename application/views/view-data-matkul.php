<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Matakuliah</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Matakuliah
                </th>
            </tr>
            <tr>
                <th>Kode Matakuliah</th>
                <th>:</th>
                <td><?= $kode; ?></td>
            </tr>
            <tr>
                <th>Nama Matakuliah</th>
                <th>:</th>
                <td><?= $nama; ?></td>
            </tr>
            <tr>
                <th>SKS</th>
                <th>:</th>
                <td><?= $sks; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>