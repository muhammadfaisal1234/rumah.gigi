<?php include 'views/layouts/template.php'; ?>

<h2>Tambah Jadwal Pasien</h2>

<form method="post">
    <label>Pasien:</label>
    <select name="pasien_id" required>
        <option value="">-- Pilih Pasien --</option>
        <?php foreach ($pasien as $p): ?>
            <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Dokter:</label>
    <select name="dokter_id" required>
        <option value="">-- Pilih Dokter --</option>
        <?php foreach ($dokter as $d): ?>
            <option value="<?= $d['id'] ?>"><?= $d['nama'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Tanggal:</label>
    <input type="date" name="tanggal" required><br><br>

    <label>Jam:</label>
    <input type="time" name="jam" required><br><br>

    <button type="submit">Simpan</button>
</form>