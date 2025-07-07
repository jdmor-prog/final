# Plataforma de Cursos con PHP

Este proyecto es una aplicación web modular desarrollada con **PHP, PDO y HTML**. El sistema implementa operaciones **CRUD** completas para gestionar cursos, lecciones, usuarios, estudiantes y sus inscripciones, demostrando el uso de relaciones SQL y una arquitectura basada en el patrón **Modelo-Vista-Controlador (MVC)**.

El objetivo principal es aplicar buenas prácticas de desarrollo web sin frameworks, enfocándose en la separación de responsabilidades, la seguridad en las consultas a la base de datos y una estructura de código organizada y escalable.

## Características Principales

* **Arquitectura MVC:** Separación clara de la lógica de negocio (Modelos), la presentación (Vistas) y el control de la aplicación (Controladores).
* **PHP:** Construido desde cero sin frameworks de PHP.
* **Operaciones CRUD completas** para todas las entidades del sistema.
* **Conexión Segura a MySQL:** Uso de **PDO** con sentencias preparadas para prevenir inyección SQL.
* **Relaciones Implementadas:**
    * **1:1 (Uno a Uno):** Usuarios y Perfiles.
    * **1:N (Uno a Muchos):** Cursos y Lecciones.
    * **N:M (Muchos a Muchos):** Estudiantes y Cursos.
* **Diseño Sencillo y Funcional:** Interfaz de usuario limpia y fácil de navegar.
* **Autocargador de Clases:** Carga dinámica de clases para un código más limpio y eficiente.

---

## Pasos de Instalación

Para ejecutar este proyecto en tu entorno local, sigue estos pasos:

### 1. Prerrequisitos

* Un servidor web local (XAMPP, WAMP, Laragon, etc.).
* PHP 7.4 o superior.
* MySQL o MariaDB.

### 2. Instalación

1.  **Clona el repositorio** en la carpeta `htdocs` (o `www`) de tu servidor local.
    ```bash
    git clone <https://github.com/jdmor-prog/final> final
    ```

2.  **Crea la Base de Datos:**
    * Abre tu gestor de base de datos (por ejemplo, phpMyAdmin).
    * Crea una nueva base de datos. Se recomienda usar el nombre `plataforma_cursos`, ya que es el que está configurado por defecto.
    * Importa el archivo `database.sql` (que debes crear y añadir al proyecto) en la base de datos recién creada. Esto creará las tablas y algunos datos de prueba.

3.  **Configura la Conexión:**
    * Abre el archivo `config/Database.php`.
    * Modifica las credenciales de conexión con tu usuario y contraseña de MySQL.
    ```php
    // ...
    $host = 'localhost';
    $dbname = 'plataforma_cursos'; // Asegúrate de que coincida con tu BD
    $user = 'root';                // Tu usuario de MySQL
    $pass = '';                    // Tu contraseña de MySQL
    // ...
    ```

4.  **Ejecuta la Aplicación:**
    * Inicia tu servidor Apache y MySQL desde el panel de control de XAMPP (o similar).
    * Abre tu navegador web y ve a `http://localhost/final/`.
