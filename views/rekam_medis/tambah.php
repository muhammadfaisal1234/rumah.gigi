<?php include 'views/layouts/template.php'; ?>

<h2>Tambah Rekam Medis</h2>

<form action="" method="post">
    <label>Pasien</label><br>
    <select name="pasien_id" required>
        <option value="">-- Pilih Pasien --</option>
        <?php foreach ($pasien as $p): ?>
            <option value="<?= $p['id'] ?>"><?= $p['nama'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Dokter</label><br>
    <select name="dokter_id" required>
        <option value="">-- Pilih Dokter --</option>
        <?php foreach ($dokter as $d): ?>
            <option value="<?= $d['id'] ?>"><?= $d['nama'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Tanggal</label><br>
    <input type="date" name="tanggal" required><br><br>

    <label>Diagnosa</label><br>
    <textarea name="diagnosa" required></textarea><br><br>

    <label>Tindakan</label><br>
    <textarea name="tindakan" required></textarea><br><br>

    <button type="submit">Simpan</button>
    <a href="index.php?page=rekam_medis">Batal</a>
</form>