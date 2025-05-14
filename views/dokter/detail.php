<?php include '../views/layouts/template.php'; ?>
<h2>Detail Dokter</h2>
<p><strong>Nama:</strong> <?= $dokter['nama'] ?></p>
<p><strong>Spesialisasi:</strong> <?= $dokter['spesialisasi'] ?></p>
<p><strong>No Telepon:</strong> <?= $dokter['no_telepon'] ?></p>
<a href="index.php?page=dokter">Kembali</a>