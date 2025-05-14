<?php
require_once 'models/RekamMedisModel.php';

class RekamMedisController
{
    private $model;

    public function __construct()
    {
        $this->model = new RekamMedisModel();
    }

    public function index()
    {
        $data = $this->model->getAll();
        include 'views/rekam_medis/index.php';
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header('Location: index.php?page=rekam_medis');
        }
        include 'views/rekam_medis/tambah.php';
    }

    public function edit($id)
    {
        $rekam = $this->model->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: index.php?page=rekam_medis');
        }
        include 'views/rekam_medis/edit.php';
    }

    public function delete($id)
    {
        $this->model->delete($id);
        header('Location: index.php?page=rekam_medis');
    }

    public function detail($id)
    {
        $rekam = $this->model->getById($id);
        include 'views/rekam_medis/detail.php';
    }
}
