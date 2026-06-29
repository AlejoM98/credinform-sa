<div align="center">
  <img src="assets/images/logo/logo.png" alt="Credinform Logo" width="200"/>
  <h1>Credinform SA — Sistema de Gestión de Pólizas</h1>
  <p>Panel administrativo para el seguimiento y trazabilidad de pólizas de seguro mediante un flujo Kanban visual</p>

  ![PHP](https://img.shields.io/badge/PHP-7.4+-777BB4?style=flat-square&logo=php&logoColor=white)
  ![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=flat-square&logo=mysql&logoColor=white)
  ![Bootstrap](https://img.shields.io/badge/Bootstrap-4-7952B3?style=flat-square&logo=bootstrap&logoColor=white)
  ![JavaScript](https://img.shields.io/badge/JavaScript-ES6-F7DF1E?style=flat-square&logo=javascript&logoColor=black)
  ![Estado](https://img.shields.io/badge/Estado-Portafolio-brightgreen?style=flat-square)
</div>

---

## Descripción

**Credinform SA** es un sistema web de gestión interna desarrollado para una empresa boliviana de seguros y fianzas. Permite a los ejecutivos registrar, hacer seguimiento y auditar el ciclo de vida completo de cada póliza, desde su evaluación inicial hasta su ejecución final.

---

## Capturas de pantalla

> _Agrega aquí capturas del dashboard, kanban y formulario de pólizas_

---

## Funcionalidades principales

### Tablero Kanban con drag & drop
Las pólizas se gestionan visualmente a través de 4 carriles de estado:

| Carril | Descripción |
|--------|-------------|
| **Evaluado** | Póliza recibida y en revisión inicial |
| **Comité** | En proceso de aprobación por comité |
| **Cierre** | Lista para firma y emisión |
| **Ejecutado** | Póliza emitida y activa |

El ejecutivo arrastra las tarjetas entre columnas y el sistema persiste el cambio en la base de datos automáticamente vía AJAX.

### Sistema de alertas por vencimiento
Cada tarjeta del kanban calcula automáticamente los días restantes hasta el vencimiento de la póliza:
- 🟡 **Pendiente** — más de 10 días para vencer
- 🔴 **Urgente** — menos de 10 días para vencer

### Dashboard con métricas en tiempo real
Panel principal con contadores por estado, gráficas de distribución y resumen ejecutivo de todas las pólizas activas.

### Registro de clientes
Soporte para dos tipos de afianzados:
- **Persona Natural** — clientes individuales
- **Persona Jurídica** — empresas y organizaciones

### Trazabilidad completa (Bitácora)
Cada movimiento de una póliza queda registrado en la bitácora con: usuario responsable, fecha, hora y estado al que fue movida. Esto permite auditar el historial completo de cualquier póliza.

### Gestión de usuarios y sesiones
- Login con autenticación segura (prepared statements + bcrypt)
- Control de sesiones con regeneración de ID
- Logout con destrucción completa de sesión

---

## Stack tecnológico

| Capa | Tecnología |
|------|-----------|
| Frontend | HTML5, CSS3, JavaScript (ES6), Bootstrap 4 |
| Backend | PHP 7.4+ |
| Base de datos | MySQL 5.7+ |
| Librerías | jQuery, DataTables, Chartist.js, SortableJS |
| Plantilla base | Viho Admin (Pixelstrap) |

---

## Instalación local

### Requisitos
- XAMPP / WAMP / Laragon (PHP 7.4+ y MySQL)
- Navegador moderno

### Pasos

**1. Clonar el repositorio**
```bash
git clone https://github.com/AlejoM98/credinform-sa.git
cd credinform-sa
```

**2. Mover a la carpeta del servidor**
```bash
# En XAMPP:
cp -r credinform-sa C:/xampp/htdocs/credinform
```

**3. Crear la base de datos**

Abre phpMyAdmin y ejecuta el script:
```
database/credinform_sa.sql
```

**4. Configurar la conexión**

Copia el archivo de ejemplo y edita tus credenciales:
```bash
cp assets/ajax/conexion.example.php assets/ajax/conexion.php
```
Edita `conexion.php` con tu usuario y contraseña de MySQL.

**5. Acceder al sistema**
```
http://localhost/credinform/
```

---

## Estructura del proyecto

```
credinform/
├── index.html              # Redirección al sistema
├── assets/
│   ├── ajax/               # Endpoints PHP (AJAX)
│   │   ├── conexion.php    # Configuración BD (no incluido en Git)
│   │   ├── seguridad.php   # Login / logout / sesión
│   │   ├── kanban.php      # Mover pólizas entre carriles
│   │   ├── poliform.php    # CRUD de pólizas
│   │   └── trazabilidad.php# Bitácora de movimientos
│   ├── css/                # Estilos (Bootstrap + tema)
│   ├── js/                 # Scripts del cliente
│   └── images/             # Recursos visuales
├── es/                     # Vistas PHP del sistema
│   ├── login.html          # Pantalla de acceso
│   ├── index.php           # Dashboard principal
│   ├── kanban.php          # Tablero Kanban
│   ├── PoliFom.php         # Registro de nuevas pólizas
│   ├── tarea.php           # Trazabilidad / bitácora
│   └── user-profile.php    # Perfil de usuario
└── README.md
```

---

## Seguridad implementada

- ✅ Prepared statements (PDO/MySQLi) en todas las consultas — prevención de SQL Injection
- ✅ Contraseñas hasheadas con `password_hash()` (bcrypt)
- ✅ `session_regenerate_id()` al iniciar sesión — prevención de Session Fixation
- ✅ Validación de sesión en endpoints protegidos
- ✅ Credenciales de BD excluidas del repositorio vía `.gitignore`

---

## Autor

**Alejandro M.**
Desarrollador Web Full Stack

[![GitHub](https://img.shields.io/badge/GitHub-AlejoM98-181717?style=flat-square&logo=github)](https://github.com/AlejoM98)

---

## Licencia

Este proyecto fue desarrollado con fines educativos y de portafolio personal.