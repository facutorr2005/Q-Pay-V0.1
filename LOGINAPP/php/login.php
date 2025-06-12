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
            <div class="error-message" style="display:block;">
                <?= htmlspecialchars($_GET['error']) ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="procesar_login.php" id="loginForm">
            <div class="form-group">
                <label class="form-label" for="usuario">Email o Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-input" placeholder="Ingresa tu email o usuario" required>
            </div>

            <div class="form-group">
                <label class="form-label" for="password">Contraseña</label>
                <div style="position: relative;">
                    <input type="password" name="password" id="password" class="form-input" placeholder="Ingresa tu contraseña" required>
                    <button type="button" class="password-toggle" onclick="togglePassword()">👁️</button>
                </div>
            </div>

            <div class="remember-forgot">
                <label class="remember-me">
                    <input type="checkbox" id="remember">
                    Recordarme
                </label>
                <a href="#" class="forgot-password">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit" class="login-btn">Iniciar Sesión</button>
        </form>

        <div class="divider">
            <span>o</span>
        </div>

        <div class="register-link">
            ¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleButton = document.querySelector('.password-toggle');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.textContent = '🙈';
            } else {
                passwordInput.type = 'password';
                toggleButton.textContent = '👁️';
            }
        }

        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.style.transform = 'translateY(-2px)';
            });

            input.addEventListener('blur', function() {
                this.style.transform = '';
            });
        });
    </script>
</body>
</html>