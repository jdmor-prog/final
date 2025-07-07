<?php
require_once __DIR__ . '/../config/Database.php';

class EstudianteCurso {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    // Inscribir estudiante a curso
    public function inscribir($estudiante_id, $curso_id): bool {
        $stmt = $this->db->prepare("INSERT INTO estudiante_curso (estudiante_id, curso_id) VALUES (?, ?)");
        return $stmt->execute([$estudiante_id, $curso_id]);
    }

    // Eliminar inscripción
    public function desinscribir($estudiante_id, $curso_id): bool {
        $stmt = $this->db->prepare("DELETE FROM estudiante_curso WHERE estudiante_id = ? AND curso_id = ?");
        return $stmt->execute([$estudiante_id, $curso_id]);
    }

    // Obtener cursos del estudiante
    public function cursosPorEstudiante($estudiante_id): array {
        $stmt = $this->db->prepare("
            SELECT cursos.* FROM cursos
            JOIN estudiante_curso ON cursos.id = estudiante_curso.curso_id
            WHERE estudiante_curso.estudiante_id = ?
        ");
        $stmt->execute([$estudiante_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener cursos NO inscritos (útil para el formulario de inscripción)
    public function cursosNoInscritos($estudiante_id): array {
        $stmt = $this->db->prepare("
            SELECT * FROM cursos
            WHERE id NOT IN (
                SELECT curso_id FROM estudiante_curso WHERE estudiante_id = ?
            )
        ");
        $stmt->execute([$estudiante_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
