<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido - Q-Pay</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <header class="header">
        <div class="header-container">
            <a href="#" class="logo">Q-Pay</a>
            <nav>
                <ul class="nav-menu">
                    <li class="nav-item"><a href="#" class="nav-link">Inicio</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Historial</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Perfil</a></li>
                    <li class="nav-item"><a href="logout.php" class="nav-link">Cerrar sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content">
        <div class="container">
            <h1 class="promotions-title">¡Hola, <?= $_SESSION['usuario']; ?>!</h1>
            <p style="color: white;">Bienvenido a Q-Pay. Desde aquí podés acceder a todas tus funcionalidades.</p>
        </div>
    </main>
</body>
</html>
