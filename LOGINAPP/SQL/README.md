# LOGINAPP - Sistema de registro y login

Este proyecto es un sistema de autenticación completo hecho en PHP y MySQL, con diseño visual adaptado al estilo Q-Pay.

---

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
2. Importá el archivo: `sql/base_de_datos_actualizado.sql`

Esto creará:

- Base: `sistema_login`
- Tabla: `usuarios` con los siguientes campos:

| Campo              | Tipo         |
|--------------------|--------------|
| id                 | INT (PK)     |
| nombre             | VARCHAR(50)  |
| apellido           | VARCHAR(50)  |
| fecha_nacimiento   | DATE         |
| email              | VARCHAR(100) |
| usuario            | VARCHAR(50) (único) |
| password           | VARCHAR(255) (cifrado SHA256) |

---

### 4. Abrí el sistema en el navegador

```txt
http://localhost/LOGINAPP/php/login.php
```

---

## 🧪 Funcionalidades

- Registro de usuario completo con validaciones
- Login funcional con sesiones
- Diseño moderno unificado con Q-Pay
- Logout seguro
- Mensajes de error/success dinámicos
- Export SQL lista para importar
- Código limpio y organizado

---

### ✅ Carpetas

- `/php` → archivos PHP (login, registro, lógica)
- `/css` → estilos visuales
- `/sql` → scripts de base de datos

---

### 🛑 Nota de seguridad

No subas `conexion.php` con datos reales si el repositorio es público.

---

### 💬 Créditos

Sistema desarrollado por Iván Gonzalo con soporte visual estilo Q-Pay.