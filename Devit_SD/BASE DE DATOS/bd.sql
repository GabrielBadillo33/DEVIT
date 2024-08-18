CREATE DATABASE tienda_online;
USE tienda_online;

-- Tabla de usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL
);

-- Tabla de productos
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(100) NOT NULL,
    descripcion_producto TEXT NOT NULL,
    precio_producto DECIMAL(10,2) NOT NULL,
    cantidad_producto INT NOT NULL,
    imagen_producto VARCHAR(255) NOT NULL
);

-- Tabla de productos_prueba (si es necesaria)
CREATE TABLE productos_prueba (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(100) NOT NULL,
    descripcion_producto TEXT NOT NULL,
    precio_producto DECIMAL(10,2) NOT NULL,
    cantidad_producto INT NOT NULL,
    imagen_producto VARCHAR(255) NOT NULL
);

-- Inserción de datos en la tabla productos
INSERT INTO productos (nombre_producto, descripcion_producto, precio_producto, cantidad_producto, imagen_producto)
VALUES ('Dysport', 'Medicina botulínica', 2500.00, 24, '../IMG/img1.jpeg'),
       ('Nabota', 'Medicina botulínica', 2500.00, 24, '../IMG/nabota.jpeg'),
       ('XEOOMEN', 'Medicina botulínica', 2500.00, 24, '../IMG/xeo.jpeg');
