<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Q-Pay</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div class="register-container">
        <div class="logo-section">
            <a href="index.html" class="logo">Q-Pay</a>
            <p class="welcome-text">Crear una cuenta nueva</p>
        </div>

        <?php if (isset($_GET['error'])): ?>
            <div class="error-message">
                <?= htmlspecialchars($_GET['error']) ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_GET['ok'])): ?>
            <div class="success-message">
                Registro exitoso. Ahora puedes iniciar sesión.
            </div>
        <?php endif; ?>

        <form method="POST" action="procesar_registro.php">
            <div class="form-group">
                <label class="form-label" for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-input" placeholder="Nombre de usuario" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-input" placeholder="Contraseña segura" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="confirmar">Confirmar Contraseña</label>
                <input type="password" name="confirmar" id="confirmar" class="form-input" placeholder="Repite la contraseña" required>
            </div>

            <button type="submit" class="register-btn">Registrarme</button>
        </form>

        <div class="divider"><span>o</span></div>

        <div class="login-link">
            ¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a>
        </div>
    </div>
</body>
</html>
