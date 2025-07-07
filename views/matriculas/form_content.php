<h2>Inscribir Estudiante en Curso</h2>
<form method="post" action="index.php?seccion=matriculas&action=inscribir">
    
    <input type="hidden" name="estudiante_id" value="<?= htmlspecialchars($_GET['id']) ?>">
    
    <fieldset>
        <legend>Selecciona los cursos disponibles</legend>
        <?php foreach ($cursos as $curso): ?>
            <label>
                <input type="checkbox" name="cursos[]" value="<?= $curso['id'] ?>">
                <?= htmlspecialchars($curso['titulo']) ?>
            </label>
        <?php endforeach; ?>
    </fieldset>
    
    <button type="submit">Inscribir en Cursos</button>
</form>