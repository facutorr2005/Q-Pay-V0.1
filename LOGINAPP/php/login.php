<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: bienvenida.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Q-Pay</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <div class="login-container">
        <div class="logo-section">
            <a href="index.html" class="logo">Q-Pay</a>
            <p class="welcome-text">Bienvenido de vuelta</p>
        </div>

        <?php if (isset($_GET['error'])): ?>
            <div class="error-message">
                <?= htmlspecialchars($_GET['error']) ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="procesar_login.php">
            <div class="form-group">
                <label class="form-label" for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-input" placeholder="Tu usuario" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-input" placeholder="Tu contraseña" required>
            </div>

            <button type="submit" class="login-btn">Iniciar Sesión</button>
        </form>

        <div class="divider"><span>o</span></div>

        <div class="register-link">
            ¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a>
        </div>
    </div>
</body>
</html>
