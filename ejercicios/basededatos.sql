CREATE DATABASE parcial1_U2019051;

USE parcial1_U2019051;

CREATE TABLE persona (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(100),
  apellido VARCHAR(100),
  fecha_nacimiento DATE,
  email VARCHAR(100),
  telefono VARCHAR(20),
  direccion VARCHAR(255),
  fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO persona (nombre, apellido, fecha_nacimiento, email, telefono, direccion) 
VALUES ('Juan', 'Pérez', '1990-03-15', 'juan.perez@example.com', '123456789', 'Calle Falsa 123, Ciudad');

INSERT INTO persona (nombre, apellido, fecha_nacimiento, email, telefono, direccion) 
VALUES ('María', 'García', '1985-07-22', 'maria.garcia@example.com', '987654321', 'Avenida Siempre Viva 456, Ciudad');

INSERT INTO persona (nombre, apellido, fecha_nacimiento, email, telefono, direccion) 
VALUES ('Carlos', 'López', '1978-12-05', 'carlos.lopez@example.com', '456123789', 'Boulevard de los Sueños 789, Ciudad');

INSERT INTO persona (nombre, apellido, fecha_nacimiento, email, telefono, direccion) 
VALUES ('Ana', 'Martínez', '1995-09-10', 'ana.martinez@example.com', '321654987', 'Pasaje de la Esperanza 101, Ciudad');

INSERT INTO persona (nombre, apellido, fecha_nacimiento, email, telefono, direccion) 
VALUES ('Luis', 'Gómez', '1988-04-18', 'luis.gomez@example.com', '789456123', 'Camino Real 202, Ciudad');

INSERT INTO persona (nombre, apellido, fecha_nacimiento, email, telefono, direccion) 
VALUES ('Elena', 'Rodríguez', '1992-11-30', 'elena.rodriguez@example.com', '654321987', 'Vía Láctea 303, Ciudad');

INSERT INTO persona (nombre, apellido, fecha_nacimiento, email, telefono, direccion) 
VALUES ('José', 'Fernández', '1983-06-25', 'jose.fernandez@example.com', '123789456', 'Carretera del Norte 404, Ciudad');

INSERT INTO persona (nombre, apellido, fecha_nacimiento, email, telefono, direccion) 
VALUES ('Lucía', 'Hernández', '1998-01-12', 'lucia.hernandez@example.com', '987123654', 'Paseo de la Paz 505, Ciudad');

INSERT INTO persona (nombre, apellido, fecha_nacimiento, email, telefono, direccion) 
VALUES ('Miguel', 'Sánchez', '1975-08-20', 'miguel.sanchez@example.com', '654987321', 'Calle del Sol 606, Ciudad');

INSERT INTO persona (nombre, apellido, fecha_nacimiento, email, telefono, direccion) 
VALUES ('Sofía', 'Ruiz', '2000-02-28', 'sofia.ruiz@example.com', '321987654', 'Avenida de la Luna 707, Ciudad');
