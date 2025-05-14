<?php include 'views/layouts/template.php'; ?>

<h2>Data Rekam Medis</h2>
<a href="index.php?page=rekam_medis&action=tambah" class="btn">+ Tambah Rekam Medis</a>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Pasien</th>
        <th>Dokter</th>
        <th>Tanggal</th>
        <th>Diagnosa</th>
        <th>Tindakan</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1;
    foreach ($rekamMedis as $data): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['nama_pasien'] ?></td>
            <td><?= $data['nama_dokter'] ?></td>
            <td><?= $data['tanggal'] ?></td>
            <td><?= $data['diagnosa'] ?></td>
            <td><?= $data['tindakan'] ?></td>
            <td>
                <a href="index.php?page=rekam_medis&action=detail&id=<?= $data['id'] ?>">Detail</a> |
                <a href="index.php?page=rekam_medis&action=edit&id=<?= $data['id'] ?>">Edit</a> |
                <a href="index.php?page=rekam_medis&action=hapus&id=<?= $data['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>