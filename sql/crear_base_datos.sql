-- Usar la base de datos recién creada
CREATE DATABASE colegio;
USE colegio;

-- Crear la tabla Alumnos
CREATE TABLE Alumnos (
    idAlumno INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    fechaNacimiento DATE NOT NULL
);

