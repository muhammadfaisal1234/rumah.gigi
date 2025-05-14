<?php

include(__DIR__ . '/../layouts/template.php'); ?>

<style>
    .dokter-container {
        max-width: 1000px;
        margin: 40px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .dokter-container h2 {
        color: rgb(3, 173, 142);
        text-align: center;
        margin-bottom: 20px;
    }

    .btn-tambah {
        display: inline-block;
        padding: 10px 20px;
        margin-bottom: 20px;
        background-color: rgb(3, 173, 142);
        color: white;
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
    }

    .btn-tambah:hover {
        background-color: rgb(2, 150, 123);
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th,
    table td {
        padding: 12px 15px;
        border: 1px solid #ddd;
        text-align: left;
    }

    table th {
        background-color: rgb(3, 173, 142);
        color: white;
    }

    .aksi-link a {
        margin-right: 8px;
        text-decoration: none;
        padding: 6px 10px;
        border-radius: 4px;
        font-size: 14px;
        font-weight: bold;
    }

    .aksi-link a.detail {
        background-color: #3498db;
        color: white;
    }

    .aksi-link a.edit {
        background-color: #f39c12;
        color: white;
    }

    .aksi-link a.delete {
        background-color: #e74c3c;
        color: white;
    }

    .aksi-link a:hover {
        opacity: 0.8;
    }
</style>

<div class="dokter-container">
    <h2>Daftar Dokter</h2>
    <a href="index.php?page=dokter&action=tambah" class="btn-tambah">+ Tambah Dokter</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Spesialisasi</th>
            <th>No Telepon</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($data as $dokter): ?>
            <tr>
                <td><?= $dokter['id'] ?></td>
                <td><?= $dokter['nama'] ?></td>
                <td><?= $dokter['spesialisasi'] ?></td>
                <td><?= $dokter['no_telepon'] ?></td>
                <td class="aksi-link">
                    <a href="index.php?page=dokter&action=detail&id=<?= $dokter['id'] ?>" class="detail">Detail</a>
                    <a href="index.php?page=dokter&action=edit&id=<?= $dokter['id'] ?>" class="edit">Edit</a>
                    <a href="index.php?page=dokter&action=delete&id=<?= $dokter['id'] ?>" class="delete" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>