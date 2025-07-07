<?php
require_once __DIR__ . '/../config/Database.php';

class Estudiante {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getAll(): array {
        return $this->db->query("SELECT id, nombre_completo, email FROM estudiantes")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id): array|false {
        $stmt = $this->db->prepare("SELECT * FROM estudiantes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nombre_completo, $email): bool {
        $stmt = $this->db->prepare("INSERT INTO estudiantes (nombre_completo, email) VALUES (?, ?)");
        return $stmt->execute([$nombre_completo, $email]);
    }

    public function update($id, $nombre_completo, $email): bool {
        $stmt = $this->db->prepare("UPDATE estudiantes SET nombre_completo = ?, email = ? WHERE id = ?");
        return $stmt->execute([$nombre_completo, $email, $id]);
    }

    public function delete($id): bool {
        $stmt = $this->db->prepare("DELETE FROM estudiantes WHERE id = ?");
        return $stmt->execute([$id]);
    }
}