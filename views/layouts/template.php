<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Rumah Gigi</title>
    <style>
        body {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header,
        footer {
            background-color: rgb(3, 173, 142);
            color: white;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #f0f0f0;
            padding: 10px;
            text-align: center;
        }

        nav a {
            margin: 0 10px;
            text-decoration: none;
        }

        main {
            padding: 20px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Rumah.Gigi</h1>
    </header>
    <nav>
        <a href="index.php?page=dokter">Dokter</a>
        <a href="index.php?page=pasien">Pasien</a>
        <a href="index.php?page=pegawai">Pegawai</a>
        <a href="index.php?page=rekam_medis">Rekam Medis</a>
        <a href="index.php?page=jadwal_pasien">Jadwal Pasien</a>
        <a href="index.php?page=users">Users</a>
    </nav>
    <main>
    </main>
    <footer>
        &copy; <?= date('Y') ?> Rumah Gigi
    </footer>
</body>

</html>