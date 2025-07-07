<h2>Perfil de Usuario</h2>
<form method="post" action="index.php?seccion=perfiles&action=store">
    
    <input type="hidden" name="usuario_id" value="<?= htmlspecialchars($_GET['id']) ?>">
    
    <label for="bio">Biografía</label>
    <textarea id="bio" name="bio" placeholder="Habla un poco sobre ti..." required><?= htmlspecialchars($perfil['bio'] ?? '') ?></textarea>
    
    <button type="submit">Guardar Perfil</button>
</form>