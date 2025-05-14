<?php include 'views/layouts/template.php'; ?>
<h2>Detail Pegawai</h2>
<p><strong>Nama:</strong> <?= $pegawai['nama'] ?></p>
<p><strong>Jabatan:</strong> <?= $pegawai['jabatan'] ?></p>
<p><strong>Alamat:</strong> <?= $pegawai['alamat'] ?></p>
<p><strong>No. Telp:</strong> <?= $pegawai['no_telp'] ?></p>
<a href="index.php?page=pegawai">Kembali</a>