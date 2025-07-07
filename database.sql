DROP DATABASE IF EXISTS plataforma_cursos;

CREATE DATABASE plataforma_cursos CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE plataforma_cursos;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE perfiles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL UNIQUE,
    bio TEXT,
    foto_url VARCHAR(255) DEFAULT 'default_avatar.png',
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

CREATE TABLE cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    descripcion TEXT,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE lecciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    curso_id INT NOT NULL,
    titulo VARCHAR(200) NOT NULL,
    contenido TEXT,
    orden INT DEFAULT 0,
    FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE
);

CREATE TABLE estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_completo VARCHAR(150) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    fecha_inscripcion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE estudiante_curso (
    estudiante_id INT NOT NULL,
    curso_id INT NOT NULL,
    fecha_matricula TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (estudiante_id, curso_id),
    FOREIGN KEY (estudiante_id) REFERENCES estudiantes(id) ON DELETE CASCADE,
    FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE
);

INSERT INTO usuarios (nombre, email) VALUES
('Ana García', 'ana.garcia@email.com'),
('Luis Fernández', 'luis.fernandez@email.com'),
('Sofía López', 'sofia.lopez@email.com'),
('Juan Martínez', 'juan.martinez@email.com'),
('Elena Pérez', 'elena.perez@email.com'),
('David Sánchez', 'david.sanchez@email.com'),
('Laura Gómez', 'laura.gomez@email.com'),
('Miguel Díaz', 'miguel.diaz@email.com'),
('Isabel Ruiz', 'isabel.ruiz@email.com'),
('Javier Moreno', 'javier.moreno@email.com');

INSERT INTO perfiles (usuario_id, bio) VALUES
(1, 'Desarrolladora Full-Stack especializada en el stack MERN.'),
(2, 'Experto en ciberseguridad y hacking ético.'),
(3, 'Diseñadora UX/UI con pasión por las interfaces intuitivas.'),
(4, 'Científico de Datos con experiencia en Machine Learning.'),
(5, 'Manager de Proyectos certificado en metodologías Ágiles.'),
(6, 'Ingeniero DevOps enfocado en automatización y CI/CD.'),
(7, 'Especialista en Marketing Digital y SEO.'),
(8, 'Analista de sistemas y bases de datos SQL y NoSQL.'),
(9, 'Redactora de contenido técnico y copywriter.'),
(10, 'Administrador de sistemas Linux y redes.');

INSERT INTO cursos (titulo, descripcion) VALUES
('Desarrollo Web Completo con PHP y MySQL', 'Aprende a crear aplicaciones web dinámicas desde cero.'),
('JavaScript Moderno: Guía Definitiva', 'Domina ES6, promesas, async/await y mucho más.'),
('React: De Cero a Experto', 'Crea interfaces de usuario interactivas con la librería más popular.'),
('Python para Data Science y Machine Learning', 'Analiza datos y crea modelos predictivos con Python.'),
('Diseño de Bases de Datos Relacionales', 'Principios, normalización y buenas prácticas con SQL.'),
('Introducción a Docker y Kubernetes', 'Contenedores y orquestación para desarrolladores.'),
('Git y GitHub para Principiantes', 'Control de versiones esencial para cualquier desarrollador.'),
('Node.js: Backend con JavaScript', 'Construye APIs rápidas y escalables con Node.js y Express.'),
('Fundamentos de la Ciberseguridad', 'Protege sistemas y datos de las amenazas más comunes.'),
('Scrum y Metodologías Ágiles', 'Gestiona proyectos de forma eficiente y colaborativa.');

INSERT INTO lecciones (curso_id, titulo, contenido, orden) VALUES
(1, 'Configuración del Entorno de Desarrollo', 'Instalación de XAMPP, VS Code y Git.', 1),
(1, 'Sintaxis Básica de PHP', 'Variables, tipos de datos y estructuras de control.', 2),
(2, 'Variables, Tipos de Datos y Operadores', 'Conceptos fundamentales de JavaScript.', 1),
(3, '¿Qué es React y por qué usarlo?', 'Introducción al ecosistema de React.', 1),
(3, 'Componentes y Props', 'Creando tus primeros componentes reutilizables.', 2),
(4, 'Análisis de Datos con Pandas', 'Manipulación y limpieza de datos.', 1),
(5, 'El Modelo Entidad-Relación', 'Diseñando el esquema de tu base de datos.', 1),
(6, 'Creando tu primer contenedor Docker', 'Dockerizando una aplicación sencilla.', 1),
(7, 'Conceptos Básicos de Git', 'Repositorios, commits, ramas y fusiones.', 1),
(8, 'Tu primer servidor con Express', 'Rutas, middleware y manejo de peticiones.', 1),
(9, 'Tipos de Ataques Comunes', 'SQL Injection, XSS, CSRF y cómo prevenirlos.', 1),
(10, 'El Manifiesto Ágil', 'Valores y principios de la agilidad.', 1);

INSERT INTO estudiantes (nombre_completo, email) VALUES
('Carlos Ramírez', 'carlos.r@estudiante.com'),
('María Torres', 'maria.t@estudiante.com'),
('Pedro Jiménez', 'pedro.j@estudiante.com'),
('Lucía Castro', 'lucia.c@estudiante.com'),
('Andrés Navarro', 'andres.n@estudiante.com'),
('Carmen Ortega', 'carmen.o@estudiante.com'),
('Fernando Soto', 'fernando.s@estudiante.com'),
('Gabriela Vargas', 'gabriela.v@estudiante.com'),
('Ricardo Mendoza', 'ricardo.m@estudiante.com'),
('Paula Ríos', 'paula.r@estudiante.com');

INSERT INTO estudiante_curso (estudiante_id, curso_id) VALUES
(1, 1), (1, 2), (1, 7),
(2, 3), (2, 8),
(3, 4), (3, 5),
(4, 1), (4, 10),
(5, 6), (5, 9),
(6, 2), (6, 3),
(7, 5), (7, 7),
(8, 8),
(9, 1), (9, 4),
(10, 6), (10, 10);