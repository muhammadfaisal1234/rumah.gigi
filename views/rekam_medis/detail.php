<?php include 'views/layouts/template.php'; ?>

<h2>Detail Rekam Medis</h2>

<table>
    <tr>
        <td><strong>ID:</strong></td>
        <td><?= $rekam['id'] ?></td>
    </tr>
    <tr>
        <td><strong>Pasien ID:</strong></td>
        <td><?= $rekam['pasien_id'] ?></td>
    </tr>
    <tr>
        <td><strong>Dokter ID:</strong></td>
        <td><?= $rekam['dokter_id'] ?></td>
    </tr>
    <tr>
        <td><strong>Tanggal:</strong></td>
        <td><?= $rekam['tanggal'] ?></td>
    </tr>
    <tr>
        <td><strong>Diagnosa:</strong></td>
        <td><?= $rekam['diagnosa'] ?></td>
    </tr>
    <tr>
        <td><strong>Tindakan:</strong></td>
        <td><?= $rekam['tindakan'] ?></td>
    </tr>
</table>

<br>
<a href="index.php?page=rekam_medis">Kembali</a>