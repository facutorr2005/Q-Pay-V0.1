# LOGINAPP - Sistema de registro y login

Este proyecto es un sistema de autenticación simple hecho en PHP y MySQL, con diseño adaptado a Q-Pay.

## 🚀 Pasos para correrlo localmente

### 1. Cloná el repositorio

```bash
git clone https://github.com/TU-USUARIO/LOGINAPP.git
```

### 2. Movelo a tu servidor local (XAMPP/LAMPP)

Ubicalo en:

- Windows: `C:\xampp\htdocs\LOGINAPP\`
- Linux: `/opt/lampp/htdocs/LOGINAPP/`

### 3. Importá la base de datos

1. Abrí DBeaver o phpMyAdmin
2. Importá el archivo: `sql/base_de_datos.sql`

Esto creará:

- Base: `sistema_login`
- Tabla: `usuarios`
- Usuario por defecto:
  - Usuario: `admin`
  - Contraseña: `1234`

### 4. Abrí el sistema en el navegador

```txt
http://localhost/LOGINAPP/php/login.php
```

### ✅ Carpetas

- `/php` → todos los archivos PHP
- `/css` → estilos visuales
- `/sql` → script para crear base de datos

---

### 🛑 Nota de seguridad

No subas tu archivo `conexion.php` con datos reales de producción si el repo es público.

---

### 💬 Créditos

Sistema desarrollado por Iván Gonzalo con soporte visual estilo Q-Pay.