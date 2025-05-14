<?php include 'views/layouts/template.php'; ?>

<h2>Detail Jadwal Pasien</h2>

<p><strong>ID:</strong> <?= $jadwal['id'] ?></p>
<p><strong>ID Pasien:</strong> <?= $jadwal['pasien_id'] ?></p>
<p><strong>ID Dokter:</strong> <?= $jadwal['dokter_id'] ?></p>
<p><strong>Tanggal:</strong> <?= $jadwal['tanggal'] ?></p>
<p><strong>Jam:</strong> <?= $jadwal['jam'] ?></p>

<a href="index.php?page=jadwal_pasien">Kembali</a>