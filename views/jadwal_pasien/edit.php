<?php include 'views/layouts/template.php'; ?>

<h2>Edit Jadwal Pasien</h2>

<form method="post">
    <label>Pasien:</label>
    <select name="pasien_id" required>
        <?php foreach ($pasien as $p): ?>
            <option value="<?= $p['id'] ?>" <?= $p['id'] == $jadwal['pasien_id'] ? 'selected' : '' ?>><?= $p['nama'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Dokter:</label>
    <select name="dokter_id" required>
        <?php foreach ($dokter as $d): ?>
            <option value="<?= $d['id'] ?>" <?= $d['id'] == $jadwal['dokter_id'] ? 'selected' : '' ?>><?= $d['nama'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Tanggal:</label>
    <input type="date" name="tanggal" value="<?= $jadwal['tanggal'] ?>" required><br><br>

    <label>Jam:</label>
    <input type="time" name="jam" value="<?= $jadwal['jam'] ?>" required><br><br>

    <button type="submit">Update</button>
</form>