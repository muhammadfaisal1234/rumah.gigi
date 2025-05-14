<?php
require_once 'models/PegawaiModel.php';

class PegawaiController
{
    private $model;

    public function __construct()
    {
        $this->model = new PegawaiModel();
    }

    public function index()
    {
        $pegawai = $this->model->getAll();
        include 'views/pegawai/index.php';
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header('Location: index.php?page=pegawai');
        } else {
            include 'views/pegawai/tambah.php';
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: index.php?page=pegawai');
        } else {
            $pegawai = $this->model->getById($id);
            include 'views/pegawai/edit.php';
        }
    }

    public function detail($id)
    {
        $pegawai = $this->model->getById($id);
        include 'views/pegawai/detail.php';
    }

    public function hapus($id)
    {
        $this->model->delete($id);
        header('Location: index.php?page=pegawai');
    }
}
