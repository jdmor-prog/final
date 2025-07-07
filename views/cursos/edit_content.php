<h2>Editar Curso</h2>
<form method="post" action="index.php?seccion=cursos&action=update">
    <input type="hidden" name="id" value="<?= htmlspecialchars($curso['id']) ?>">
    
    <label>Título del Curso:</label>
    <input type="text" name="titulo" value="<?= htmlspecialchars($curso['titulo']) ?>" required>
    <br>
    <button type="submit">Actualizar</button>
</form>