<html>
    <head>
        <title>Tampilan Data Matakuliah</title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <th colspan="3">
                        Tampilan Data Matakuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode Matakuliah</th>
                    <th>:</th>
                    <td>
                        <?= $kode; ?>
                    </td>
                </tr>
                <tr>
                    <td>Nama Matakuliah</td>
                    <td>:</td>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                    <td>SKS</td>
                    <td>:</td>
                    <td>
                        <?= $sks; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url ('matakuliah'); ?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>