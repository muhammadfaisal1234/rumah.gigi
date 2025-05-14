<?php
// Routing dasar
$page = $_GET['page'] ?? 'dokter';
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

$controllerMap = [
    'dokter' => 'DokterController',
    'pasien' => 'PasienController',
    'pegawai' => 'PegawaiController',
    'rekam_medis' => 'RekamMedisController',
    'jadwal_pasien' => 'JadwalPasienController',
    'users' => 'UsersController',
];

if (array_key_exists($page, $controllerMap)) {
    $controllerName = $controllerMap[$page];
    require_once __DIR__ . '/controllers/' . $controllerName . '.php';
    $controller = new $controllerName();

    if (method_exists($controller, $action)) {
        if ($id !== null) {
            $controller->$action($id);
        } else {
            $controller->$action();
        }
    } else {
        echo "Aksi '$action' tidak ditemukan.";
    }
} else {
    echo "Halaman '$page' tidak ditemukan.";
}
