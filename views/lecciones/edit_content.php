<h2>Editar Lección</h2>
<form method="post" action="index.php?seccion=lecciones&action=update">
    <input type="hidden" name="id" value="<?= htmlspecialchars($leccion['id']) ?>">
    <input type="hidden" name="curso_id" value="<?= htmlspecialchars($leccion['curso_id']) ?>">

    <label for="titulo">Título de la Lección</label>
    <input type="text" id="titulo" name="titulo" value="<?= htmlspecialchars($leccion['titulo']) ?>" required>

    <label for="contenido">Contenido</label>
    <textarea id="contenido" name="contenido" required><?= htmlspecialchars($leccion['contenido']) ?></textarea>

    <button type="submit">Actualizar Lección</button>
</form>