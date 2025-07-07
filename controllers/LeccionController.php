<?php
require_once __DIR__ . '/../models/Leccion.php';

class LeccionController {
    private Leccion $leccion;

    public function __construct() {
        $this->leccion = new Leccion();
    }

    public function index($curso_id) {
        $lecciones = $this->leccion->getByCurso($curso_id);
        include __DIR__ . '/../views/lecciones/index.php';
    }

    public function create($curso_id) {
        include __DIR__ . '/../views/lecciones/create.php';
    }

    public function store($data) {
        if (empty($data['titulo']) || empty($data['contenido'])) {
            die('El título y el contenido son obligatorios');
        }
        $this->leccion->create($data['curso_id'], $data['titulo'], $data['contenido']);
        header("Location: index.php?seccion=lecciones&action=index&id={$data['curso_id']}");
    }

    public function edit($id) {
        $leccion = $this->leccion->find($id);
        if (!$leccion) {
            die('Lección no encontrada');
        }
        include __DIR__ . '/../views/lecciones/edit.php';
    }

    public function update($data) {
        if (empty($data['titulo']) || empty($data['contenido'])) {
            die('El título y el contenido son obligatorios');
        }
        $this->leccion->update($data['id'], $data['titulo'], $data['contenido']);
        header("Location: index.php?seccion=lecciones&action=index&id={$data['curso_id']}");
    }

    public function delete($id) {
        $leccion = $this->leccion->find($id);
        if ($leccion) {
            $curso_id = $leccion['curso_id'];
            $this->leccion->delete($id);
            header("Location: index.php?seccion=lecciones&action=index&id=$curso_id");
        } else {
            header("Location: index.php?seccion=cursos");
        }
    }
}