<?php include 'views/layouts/template.php'; ?>
<h2>Data Pegawai</h2>
<a href="index.php?page=pegawai&action=tambah">Tambah Pegawai</a>
<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Alamat</th>
        <th>No. Telp</th>
        <th>Aksi</th>
    </tr>
    <?php $no = 1;
    foreach ($pegawai as $p): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $p['nama'] ?></td>
            <td><?= $p['jabatan'] ?></td>
            <td><?= $p['alamat'] ?></td>
            <td><?= $p['no_telp'] ?></td>
            <td>
                <a href="index.php?page=pegawai&action=detail&id=<?= $p['id'] ?>">Detail</a> |
                <a href="index.php?page=pegawai&action=edit&id=<?= $p['id'] ?>">Edit</a> |
                <a href="index.php?page=pegawai&action=hapus&id=<?= $p['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>