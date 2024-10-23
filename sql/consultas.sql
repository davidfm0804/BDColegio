SELECT *
FROM Alumnos;

SELECT * FROM Alumnos WHERE Nombre LIKE 'J%';

SELECT COUNT(*)
FROM Alumnos
WHERE apellido ='Martinez'; 

UPDATE Alumnos 
SET Apellido = 'Gómez' 
WHERE idAlumno = 1;

ALTER TABLE Alumnos
ADD COLUMN correo varchar(100) NOT NULL UNIQUE;