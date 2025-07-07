<h2>Nuevo Estudiante</h2>
<form method="post" action="index.php?seccion=estudiantes&action=store">
    <label>Nombre Completo:</label>
    <input type="text" name="nombre_completo" placeholder="Nombre completo del estudiante" required>
    <br>
    <label>Email:</label>
    <input type="email" name="email" placeholder="Email del estudiante" required>
    <br>
    <button type="submit">Guardar</button>
</form>