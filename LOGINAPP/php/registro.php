<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro - Q-Pay</title>
  <link rel="stylesheet" href="../css/register.css" />
</head>
<body>
  <div class="register-container">
    <div class="logo-section">
      <a href="index.html" class="logo">Q-Pay</a>
      <p class="welcome-text">Crear una cuenta nueva</p>
    </div>

    <?php if (isset($_GET['error'])): ?>
      <div class="error-message" style="display:block;">
        <?= htmlspecialchars($_GET['error']) ?>
      </div>
    <?php endif; ?>
    <?php if (isset($_GET['ok'])): ?>
      <div class="success-message" style="display:block;">
        Registro exitoso. Ahora puedes iniciar sesión.
      </div>
    <?php endif; ?>

    <form method="POST" action="procesar_registro.php">
      <div class="form-row">
        <div class="form-group">
          <label class="form-label" for="nombre">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-input" required />
        </div>
        <div class="form-group">
          <label class="form-label" for="apellido">Apellido</label>
          <input type="text" name="apellido" id="apellido" class="form-input" required />
        </div>
      </div>

      <div class="form-group">
        <label class="form-label" for="fecha_nacimiento">Fecha de nacimiento</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-input" required />
      </div>

      <div class="form-group">
        <label class="form-label" for="email">Correo electrónico</label>
        <input type="email" name="email" id="email" class="form-input" required />
      </div>

      <div class="form-group">
        <label class="form-label" for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" class="form-input" required />
      </div>

      <div class="form-group">
        <label class="form-label" for="password">Contraseña</label>
        <div style="position: relative;">
          <input type="password" name="password" id="password" class="form-input" required />
          <button type="button" class="password-toggle" onclick="togglePassword()">👁️</button>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label" for="confirmar">Confirmar contraseña</label>
        <input type="password" name="confirmar" id="confirmar" class="form-input" required />
      </div>

      <div class="checkbox-group">
        <input type="checkbox" id="terms" required />
        <label for="terms">Acepto los <a href="#">términos y condiciones</a></label>
      </div>

      <button type="submit" class="register-btn">Registrarme</button>
    </form>

    <div class="divider"><span>o</span></div>

    <div class="login-link">
      ¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a>
    </div>
  </div>

  <script>
    function togglePassword() {
      const pass = document.getElementById('password');
      const btn = document.querySelector('.password-toggle');
      if (pass.type === 'password') {
        pass.type = 'text';
        btn.textContent = '🙈';
      } else {
        pass.type = 'password';
        btn.textContent = '👁️';
      }
    }
  </script>
</body>
</html>