<?php
require_once __DIR__ . '/../config/Database.php';

class Leccion {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    // Todas las lecciones de un curso
    public function getByCurso($curso_id): array {
        $stmt = $this->db->prepare("SELECT * FROM lecciones WHERE curso_id = ?");
        $stmt->execute([$curso_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener una lección por ID
    public function find($id): array|false {
        $stmt = $this->db->prepare("SELECT * FROM lecciones WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Crear lección
    public function create($curso_id, $titulo, $contenido): bool {
        $stmt = $this->db->prepare("INSERT INTO lecciones (curso_id, titulo, contenido) VALUES (?, ?, ?)");
        return $stmt->execute([$curso_id, $titulo, $contenido]);
    }

    // Actualizar lección
    public function update($id, $titulo, $contenido): bool {
        $stmt = $this->db->prepare("UPDATE lecciones SET titulo = ?, contenido = ? WHERE id = ?");
        return $stmt->execute([$titulo, $contenido, $id]);
    }

    // Eliminar lección
    public function delete($id): bool {
        $stmt = $this->db->prepare("DELETE FROM lecciones WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
