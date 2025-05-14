<?php include __DIR__ . '/../layouts/template.php'; ?>
<style>
    .form-container {
        max-width: 500px;
        margin: 40px auto;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
        text-align: center;
        color: rgb(3, 173, 142);
        margin-bottom: 25px;
    }

    .form-container label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
    }

    .form-container input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 16px;
    }

    .form-container button {
        width: 100%;
        padding: 12px;
        background-color: rgb(3, 173, 142);
        color: white;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form-container button:hover {
        background-color: rgb(2, 150, 123);
    }
</style>

<div class="form-container">
    <h2>Tambah Dokter</h2>
    <form method="POST">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Spesialisasi:</label>
        <input type="text" name="spesialisasi" required>

        <label>No Telepon:</label>
        <input type="text" name="no_telepon" required>

        <button type="submit">Simpan</button>
    </form>
</div>