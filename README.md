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

## 📂 Estructura del Proyecto

El proyecto está organizado en las siguientes carpetas para mantener una clara separación de responsabilidades: