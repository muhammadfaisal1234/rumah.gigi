<?php include 'views/layouts/template.php'; ?>

<h2>Detail Pasien</h2>
<p><strong>Nama:</strong> <?= $pasien['nama'] ?></p>
<p><strong>Alamat:</strong> <?= $pasien['alamat'] ?></p>
<p><strong>No HP:</strong> <?= $pasien['no_hp'] ?></p>
<a href="index.php?page=pasien">Kembali</a>