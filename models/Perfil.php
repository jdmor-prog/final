<?php
require_once __DIR__ . '/../config/Database.php';

class Perfil {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    // Crear perfil (si no existe aún)
    public function create($usuario_id, $bio): bool {
        $stmt = $this->db->prepare("INSERT INTO perfiles (usuario_id, bio) VALUES (?, ?)");
        return $stmt->execute([$usuario_id, $bio]);
    }

    // Obtener perfil por ID (opcional)
    public function find($id): array|false {
        $stmt = $this->db->prepare("SELECT * FROM perfiles WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Obtener perfil por usuario_id (relación 1:1)
    public function getByUsuario($usuario_id): array|false {
        $stmt = $this->db->prepare("SELECT * FROM perfiles WHERE usuario_id = ?");
        $stmt->execute([$usuario_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Actualizar perfil existente
    public function update($id, $bio): bool {
        $stmt = $this->db->prepare("UPDATE perfiles SET bio = ? WHERE id = ?");
        return $stmt->execute([$bio, $id]);
    }

    // Eliminar perfil
    public function delete($id): bool {
        $stmt = $this->db->prepare("DELETE FROM perfiles WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
