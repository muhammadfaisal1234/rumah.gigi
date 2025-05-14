<?php include 'views/layouts/template.php'; ?>
<h2>Edit Pegawai</h2>
<form method="POST">
    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $pegawai['nama'] ?>"><br>
    <label>Jabatan:</label><br>
    <input type="text" name="jabatan" value="<?= $pegawai['jabatan'] ?>"><br>
    <label>Alamat:</label><br>
    <textarea name="alamat"><?= $pegawai['alamat'] ?></textarea><br>
    <label>No. Telp:</label><br>
    <input type="text" name="no_telp" value="<?= $pegawai['no_telp'] ?>"><br><br>
    <button type="submit">Update</button>
</form>