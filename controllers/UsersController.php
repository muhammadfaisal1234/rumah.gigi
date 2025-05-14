<?php
require_once 'models/UsersModel.php';

class UsersController
{
    private $model;

    public function __construct()
    {
        $this->model = new UsersModel();
    }

    public function index()
    {
        $users = $this->model->getAll();
        require 'views/users/index.php';
    }

    public function tambah()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->create($_POST);
            header('Location: index.php?page=users');
            exit;
        }
        require 'views/users/tambah.php';
    }

    public function edit($id)
    {
        $user = $this->model->getById($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->update($id, $_POST);
            header('Location: index.php?page=users');
            exit;
        }
        require 'views/users/edit.php';
    }

    public function detail($id)
    {
        $user = $this->model->getById($id);
        require 'views/users/detail.php';
    }

    public function hapus($id)
    {
        $this->model->delete($id);
        header('Location: index.php?page=users');
        exit;
    }
}
