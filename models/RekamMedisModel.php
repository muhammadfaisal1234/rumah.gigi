<?php
require_once 'config/database.php';

class RekamMedisModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    public function getAll()
    {
        $stmt = $this->conn->query("SELECT * FROM rekam_medis ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM rekam_medis WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->conn->prepare("INSERT INTO rekam_medis (id_pasien, id_dokter, keluhan, diagnosa, tindakan, tanggal) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([
            $data['id_pasien'],
            $data['id_dokter'],
            $data['keluhan'],
            $data['diagnosa'],
            $data['tindakan'],
            $data['tanggal']
        ]);
    }

    public function update($id, $data)
    {
        $stmt = $this->conn->prepare("UPDATE rekam_medis SET id_pasien = ?, id_dokter = ?, keluhan = ?, diagnosa = ?, tindakan = ?, tanggal = ? WHERE id = ?");
        return $stmt->execute([
            $data['id_pasien'],
            $data['id_dokter'],
            $data['keluhan'],
            $data['diagnosa'],
            $data['tindakan'],
            $data['tanggal'],
            $id
        ]);
    }

    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM rekam_medis WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
