<?php include 'views/layouts/template.php'; ?>

<h2>Data Pasien</h2>
<a href="index.php?page=pasien&action=tambah">Tambah Pasien</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($pasien as $p): ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?= $p['nama'] ?></td>
            <td><?= $p['alamat'] ?></td>
            <td><?= $p['no_hp'] ?></td>
            <td>
                <a href="index.php?page=pasien&action=detail&id=<?= $p['id'] ?>">Detail</a> |
                <a href="index.php?page=pasien&action=edit&id=<?= $p['id'] ?>">Edit</a> |
                <a href="index.php?page=pasien&action=delete&id=<?= $p['id'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>