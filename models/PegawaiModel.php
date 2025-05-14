<?php
require_once 'config/database.php';

class PegawaiModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    public function getAll()
    {
        $stmt = $this->conn->query("SELECT * FROM pegawai");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM pegawai WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->conn->prepare("INSERT INTO pegawai (nama, jabatan, alamat, no_telp) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$data['nama'], $data['jabatan'], $data['alamat'], $data['no_telp']]);
    }

    public function update($id, $data)
    {
        $stmt = $this->conn->prepare("UPDATE pegawai SET nama = ?, jabatan = ?, alamat = ?, no_telp = ? WHERE id = ?");
        return $stmt->execute([$data['nama'], $data['jabatan'], $data['alamat'], $data['no_telp'], $id]);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM pegawai WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
