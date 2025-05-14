<?php
require_once __DIR__ . '/../models/DokterModel.php';

class DokterController
{
    private $model;

    public function __construct()
    {
        $this->model = new DokterModel();
    }

    public function index()
    {
        $data = $this->model->getAll();
        include __DIR__ . '/../views/dokter/index.php';
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header('Location: index.php?page=dokter');
            exit;
        }
        include __DIR__ . '/../views/dokter/tambah.php';
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: index.php?page=dokter');
            exit;
        }
        $dokter = $this->model->getById($id);
        include __DIR__ . '/../views/dokter/edit.php';
    }

    public function detail($id)
    {
        $dokter = $this->model->getById($id);
        include __DIR__ . '/../views/dokter/detail.php';
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: index.php?page=dokter');
        exit;
    }
}
