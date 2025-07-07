<?php
require_once __DIR__ . '/../models/EstudianteCurso.php';

class MatriculaController {
    private EstudianteCurso $matricula;

    public function __construct() {
        $this->matricula = new EstudianteCurso();
    }

    public function index($estudiante_id) {
        $cursos = $this->matricula->cursosPorEstudiante($estudiante_id);
        include __DIR__ . '/../views/matriculas/index.php';
    }

    public function inscribir($data) {
        if (!empty($data['cursos'])) {
            foreach ($data['cursos'] as $curso_id) {
                $this->matricula->inscribir($data['estudiante_id'], $curso_id);
            }
        }
        header("Location: index.php?seccion=matriculas&id=" . $data['estudiante_id']);
    }

    public function form($estudiante_id) {
        $cursos = $this->matricula->cursosNoInscritos($estudiante_id);
        include __DIR__ . '/../views/matriculas/form.php';
    }

    public function desinscribir($estudiante_id, $curso_id) {
        $this->matricula->desinscribir($estudiante_id, $curso_id);
        header("Location: index.php?seccion=matriculas&id=$estudiante_id");
    }
}
