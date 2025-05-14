<?php
require_once __DIR__ . '/../config/database.php';

class DokterModel
{
    private $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll()
    {
        $stmt = $this->conn->prepare("SELECT * FROM dokter");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM dokter WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->conn->prepare("INSERT INTO dokter (nama, spesialisasi, no_telepon) VALUES (?, ?, ?)");
        return $stmt->execute([$data['nama'], $data['spesialisasi'], $data['no_telepon']]);
    }

    public function update($id, $data)
    {
        $stmt = $this->conn->prepare("UPDATE dokter SET nama = ?, spesialisasi = ?, no_telepon = ? WHERE id = ?");
        return $stmt->execute([$data['nama'], $data['spesialisasi'], $data['no_telepon'], $id]);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM dokter WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
