<?php
class Database
{
    private static $host = 'localhost';
    private static $dbname = 'rumah_gigi';
    private static $username = 'root';
    private static $password = '';
    private static $conn;

    public static function getConnection()
    {
        if (!self::$conn) {
            try {
                self::$conn = new PDO(
                    "mysql:host=" . self::$host . ";dbname=" . self::$dbname,
                    self::$username,
                    self::$password
                );
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Koneksi gagal: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
