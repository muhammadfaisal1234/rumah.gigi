<?php include 'views/layouts/template.php'; ?>

<h2>Data Jadwal Pasien</h2>
<a href="index.php?page=jadwal_pasien&action=tambah">+ Tambah Jadwal</a>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Pasien</th>
        <th>Nama Dokter</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Aksi</th>
    </tr>
    <?php if (is_array($jadwals)) : ?>
        <?php $no = 1;
        foreach ($jadwals as $j): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($j['nama_pasien']) ?></td>
                <td><?= htmlspecialchars($j['nama_dokter']) ?></td>
                <td><?= htmlspecialchars($j['tanggal']) ?></td>
                <td><?= htmlspecialchars($j['jam']) ?></td>
                <td>
                    <a href="index.php?page=jadwal_pasien&action=detail&id=<?= $j['id'] ?>">Detail</a> |
                    <a href="index.php?page=jadwal_pasien&action=edit&id=<?= $j['id'] ?>">Edit</a> |
                    <a href="index.php?page=jadwal_pasien&action=delete&id=<?= $j['id'] ?>" onclick="return confirm('Hapus jadwal ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colspan="6">Tidak ada data atau terjadi kesalahan saat memuat jadwal pasien.</td>
        </tr>
    <?php endif; ?>
</table>