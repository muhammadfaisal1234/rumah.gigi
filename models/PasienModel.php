<?php
require_once 'config/database.php';

class PasienModel
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    public function getAll()
    {
        try {
            $query = "SELECT * FROM pasien";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Jika terjadi error, kembalikan false atau tampilkan pesan
            return false;
        }
    }


    public function getById($id)
    {
        try {
            $id = filter_var($id, FILTER_VALIDATE_INT);
            if (!$id) {
                return false;
            }

            $stmt = $this->conn->prepare("SELECT * FROM pasien WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Error saat mengambil data pasien by ID: " . $e->getMessage());
            return false;
        }
    }

    public function create($data)
    {
        try {
            // Validasi data
            if (empty($data['nama']) || empty($data['alamat']) || empty($data['no_hp'])) {
                return false;
            }

            // Sanitasi data
            $nama = htmlspecialchars(trim($data['nama']));
            $alamat = htmlspecialchars(trim($data['alamat']));
            $no_hp = htmlspecialchars(trim($data['no_hp']));

            $stmt = $this->conn->prepare("INSERT INTO pasien (nama, alamat, no_hp) VALUES (?, ?, ?)");
            $result = $stmt->execute([$nama, $alamat, $no_hp]);

            if ($result) {
                return $this->conn->lastInsertId(); // Mengembalikan ID yang baru dibuat
            }
            return false;
        } catch (PDOException $e) {
            error_log("Error saat membuat data pasien: " . $e->getMessage());
            return false;
        }
    }

    public function update($id, $data)
    {
        try {
            $id = filter_var($id, FILTER_VALIDATE_INT);
            if (!$id) {
                return false;
            }

            // Validasi data
            if (empty($data['nama']) || empty($data['alamat']) || empty($data['no_hp'])) {
                return false;
            }

            // Sanitasi data
            $nama = htmlspecialchars(trim($data['nama']));
            $alamat = htmlspecialchars(trim($data['alamat']));
            $no_hp = htmlspecialchars(trim($data['no_hp']));

            $stmt = $this->conn->prepare("UPDATE pasien SET nama = ?, alamat = ?, no_hp = ? WHERE id = ?");
            return $stmt->execute([$nama, $alamat, $no_hp, $id]);
        } catch (PDOException $e) {
            error_log("Error saat update data pasien: " . $e->getMessage());
            return false;
        }
    }

    public function delete($id)
    {
        try {
            $id = filter_var($id, FILTER_VALIDATE_INT);
            if (!$id) {
                return false;
            }

            $stmt = $this->conn->prepare("DELETE FROM pasien WHERE id = ?");
            return $stmt->execute([$id]);
        } catch (PDOException $e) {
            error_log("Error saat menghapus data pasien: " . $e->getMessage());
            return false;
        }
    }
}
