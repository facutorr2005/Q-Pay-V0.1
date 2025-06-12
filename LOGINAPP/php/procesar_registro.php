<?php
include("conexion.php");

$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$email = trim($_POST['email']);
$usuario = trim($_POST['usuario']);
$password = $_POST['password'];
$confirmar = $_POST['confirmar'];

if (
    empty($nombre) || empty($apellido) || empty($fecha_nacimiento) ||
    empty($email) || empty($usuario) || empty($password) || empty($confirmar)
) {
    header("Location: registro.php?error=Todos los campos son obligatorios");
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: registro.php?error=Email no válido");
    exit();
}

if ($password !== $confirmar) {
    header("Location: registro.php?error=Las contraseñas no coinciden");
    exit();
}

// Verificar si el usuario ya existe
$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: registro.php?error=El usuario ya existe");
    exit();
}

// Insertar usuario
$hash = hash('sha256', $password);
$sql = "INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, email, usuario, password)
        VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $nombre, $apellido, $fecha_nacimiento, $email, $usuario, $hash);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: registro.php?ok=1");
exit();
?>