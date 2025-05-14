<?php include '../views/layouts/template.php'; ?>
<h2>Edit Dokter</h2>
<form method="POST">
    <label>Nama:</label><input type="text" name="nama" value="<?= $dokter['nama'] ?>"><br>
    <label>Spesialisasi:</label><input type="text" name="spesialisasi" value="<?= $dokter['spesialisasi'] ?>"><br>
    <label>No Telepon:</label><input type="text" name="no_telepon" value="<?= $dokter['no_telepon'] ?>"><br>
    <button type="submit">Update</button>
</form>