<?php
require_once __DIR__ . '/../models/Curso.php';

class CursoController {
    private Curso $curso;

    public function __construct() {
        $this->curso = new Curso();
    }

    public function index() {
        $cursos = $this->curso->getAll();
        include __DIR__ . '/../views/cursos/index.php';
    }

    public function create() {
        include __DIR__ . '/../views/cursos/create.php';
    }

    public function store($data) {
        $this->curso->create($data['titulo']);
        header("Location: index.php?seccion=cursos");
    }

    public function edit($id) {
        $curso = $this->curso->find($id);
        include __DIR__ . '/../views/cursos/edit.php';
    }

    public function update($data) {
        $this->curso->update($data['id'], $data['titulo']);
        header("Location: index.php?seccion=cursos");
    }

    public function delete($id) {
        $this->curso->delete($id);
        header("Location: index.php?seccion=cursos");
    }
}
