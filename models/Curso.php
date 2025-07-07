<?php
require_once __DIR__ . '/../config/Database.php';

class Curso {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    // Obtener todos los cursos
    public function getAll(): array {
        $stmt = $this->db->query("SELECT * FROM cursos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener un curso por ID
    public function find($id): array|false {
        $stmt = $this->db->prepare("SELECT * FROM cursos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Crear un nuevo curso
    public function create($titulo): bool {
        $stmt = $this->db->prepare("INSERT INTO cursos (titulo) VALUES (?)");
        return $stmt->execute([$titulo]);
    }

    // Actualizar un curso existente
    public function update($id, $titulo): bool {
        $stmt = $this->db->prepare("UPDATE cursos SET titulo = ? WHERE id = ?");
        return $stmt->execute([$titulo, $id]);
    }

    // Eliminar un curso
    public function delete($id): bool {
        $stmt = $this->db->prepare("DELETE FROM cursos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
