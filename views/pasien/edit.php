<?php include 'views/layouts/template.php'; ?>

<h2>Edit Pasien</h2>
<form method="POST">
    Nama: <input type="text" name="nama" value="<?= $pasien['nama'] ?>" required><br>
    Alamat: <input type="text" name="alamat" value="<?= $pasien['alamat'] ?>" required><br>
    No HP: <input type="text" name="no_hp" value="<?= $pasien['no_hp'] ?>" required><br>
    <button type="submit">Update</button>
</form>