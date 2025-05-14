<?php
require_once 'config/database.php';

class JadwalPasienModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    public function getAll()
    {
        try {
            $sql = "
                SELECT jp.*, p.nama AS nama_pasien, d.nama AS nama_dokter
                FROM jadwal_pasien jp
                JOIN pasien p ON jp.id_pasien = p.id
                JOIN dokter d ON jp.id_dokter = d.id
                ORDER BY jp.id DESC
            ";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error getAll jadwal_pasien: " . $e->getMessage());
            return false;
        }
    }

    public function getById($id)
    {
        try {
            $stmt = $this->conn->prepare("
                SELECT jp.*, p.nama AS nama_pasien, d.nama AS nama_dokter
                FROM jadwal_pasien jp
                JOIN pasien p ON jp.id_pasien = p.id
                JOIN dokter d ON jp.id_dokter = d.id
                WHERE jp.id = ?
            ");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error getById jadwal_pasien: " . $e->getMessage());
            return false;
        }
    }

    public function create($data)
    {
        try {
            $stmt = $this->conn->prepare("
                INSERT INTO jadwal_pasien (id_pasien, id_dokter, tanggal, jam)
                VALUES (?, ?, ?, ?)
            ");
            return $stmt->execute([
                $data['id_pasien'],
                $data['id_dokter'],
                $data['tanggal'],
                $data['jam']
            ]);
        } catch (PDOException $e) {
            error_log("Error create jadwal_pasien: " . $e->getMessage());
            return false;
        }
    }

    public function update($id, $data)
    {
        try {
            $stmt = $this->conn->prepare("
                UPDATE jadwal_pasien
                SET id_pasien = ?, id_dokter = ?, tanggal = ?, jam = ?
                WHERE id = ?
            ");
            return $stmt->execute([
                $data['id_pasien'],
                $data['id_dokter'],
                $data['tanggal'],
                $data['jam'],
                $id
            ]);
        } catch (PDOException $e) {
            error_log("Error update jadwal_pasien: " . $e->getMessage());
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $stmt = $this->conn->prepare("DELETE FROM jadwal_pasien WHERE id = ?");
            return $stmt->execute([$id]);
        } catch (PDOException $e) {
            error_log("Error delete jadwal_pasien: " . $e->getMessage());
            return false;
        }
    }
}
