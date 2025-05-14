<?php include 'views/layouts/template.php'; ?>

<h2>Edit Rekam Medis</h2>

<form action="" method="post">
    <label>Pasien</label><br>
    <select name="pasien_id" required>
        <?php foreach ($pasien as $p): ?>
            <option value="<?= $p['id'] ?>" <?= $rekam['pasien_id'] == $p['id'] ? 'selected' : '' ?>>
                <?= $p['nama'] ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Dokter</label><br>
    <select name="dokter_id" required>
        <?php foreach ($dokter as $d): ?>
            <option value="<?= $d['id'] ?>" <?= $rekam['dokter_id'] == $d['id'] ? 'selected' : '' ?>>
                <?= $d['nama'] ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Tanggal</label><br>
    <input type="date" name="tanggal" value="<?= $rekam['tanggal'] ?>" required><br><br>

    <label>Diagnosa</label><br>
    <textarea name="diagnosa" required><?= $rekam['diagnosa'] ?></textarea><br><br>

    <label>Tindakan</label><br>
    <textarea name="tindakan" required><?= $rekam['tindakan'] ?></textarea><br><br>

    <button type="submit">Update</button>
    <a href="index.php?page=rekam_medis">Batal</a>
</form>