<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Gigi - Dokter</title>
    <link rel="stylesheet" href="public/assets/css/tamplate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        .dokter-container {
            max-width: 100%;
            margin: 20px;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .dokter-container h2 {
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .btn-tambah {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .btn-tambah:hover {
            background-color: var(--secondary-color);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th,
        table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: var(--primary-color);
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
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php include(__DIR__ . '/../layouts/sidebar.php'); ?>

        <!-- Main Panel -->
        <div class="main-panel">
            <!-- Navbar -->
            <?php include(__DIR__ . '/../layouts/navbar.php'); ?>

            <!-- Content -->
            <div class="content">
                <div class="container-fluid">
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
                </div>
            </div>

            <!-- Footer -->
            <footer>
                <div class="container-fluid">
                    <ul class="footer-menu">
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Layanan</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                    <p class="copyright">
                        &copy; <?= date('Y') ?> <a href="#">Rumah Gigi</a>. All Rights Reserved.
                    </p>
                </div>
            </footer>
        </div>
    </div>

    <script>
        // Toggle sidebar for mobile
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('show-sidebar');
        });
    </script>
</body>

</html>