<?php include 'views/layouts/template.php'; ?>
<h2>Tambah Pegawai</h2>
<form method="POST">
    <label>Nama:</label><br>
    <input type="text" name="nama"><br>
    <label>Jabatan:</label><br>
    <input type="text" name="jabatan"><br>
    <label>Alamat:</label><br>
    <textarea name="alamat"></textarea><br>
    <label>No. Telp:</label><br>
    <input type="text" name="no_telp"><br><br>
    <button type="submit">Simpan</button>
</form>