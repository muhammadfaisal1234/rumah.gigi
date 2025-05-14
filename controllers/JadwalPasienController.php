<?php
require_once 'models/JadwalPasienModel.php';
require_once 'models/PasienModel.php';
require_once 'models/DokterModel.php';

class JadwalPasienController
{
    private $model;

    public function __construct()
    {
        $this->model = new JadwalPasienModel();
    }

    public function index()
    {
        $jadwals = $this->model->getAll();
        include 'views/jadwal_pasien/index.php';
    }

    public function tambah()
    {
        $pasienModel = new PasienModel();
        $dokterModel = new DokterModel();
        $pasien = $pasienModel->getAll();
        $dokter = $dokterModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header('Location: index.php?page=jadwal_pasien');
        }

        include 'views/jadwal_pasien/tambah.php';
    }

    public function edit($id)
    {
        $pasienModel = new PasienModel();
        $dokterModel = new DokterModel();
        $pasien = $pasienModel->getAll();
        $dokter = $dokterModel->getAll();

        $jadwal = $this->model->getById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: index.php?page=jadwal_pasien');
        }

        include 'views/jadwal_pasien/edit.php';
    }

    public function detail($id)
    {
        $jadwal = $this->model->getById($id);
        include 'views/jadwal_pasien/detail.php';
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: index.php?page=jadwal_pasien');
    }
}
