<?php
require_once 'models/PasienModel.php';

class PasienController
{
    private $model;

    public function __construct()
    {
        $this->model = new PasienModel();
    }

    public function index()
    {
        $pasien = $this->model->getAll();
        include 'views/pasien/index.php';
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header('Location: index.php?page=pasien');
        } else {
            include 'views/pasien/tambah.php';
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: index.php?page=pasien');
        } else {
            $pasien = $this->model->getById($id);
            include 'views/pasien/edit.php';
        }
    }

    public function detail($id)
    {
        $pasien = $this->model->getById($id);
        include 'views/pasien/detail.php';
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: index.php?page=pasien');
    }
}
