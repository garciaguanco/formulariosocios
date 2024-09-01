-- Tabla para la inscripción de socios
CREATE TABLE inscripcion_socios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    fecha_nacimiento DATE NOT NULL,
    telefono VARCHAR(20) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    genero ENUM('masculino', 'femenino', 'otro') NOT NULL,
    deporte ENUM('futbol', 'baloncesto', 'tenis', 'natacion', 'otro') NOT NULL,
    comentarios TEXT,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla para los datos de contacto
CREATE TABLE datos_contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_papa VARCHAR(100) NOT NULL,
    telefono_papa VARCHAR(20) NOT NULL,
    nombre_mama VARCHAR(100) NOT NULL,
    telefono_mama VARCHAR(20) NOT NULL,
    domicilio1 VARCHAR(255) NOT NULL,
    domicilio2 VARCHAR(255)
);

-- Tabla para los datos de salud
CREATE TABLE datos_salud (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mutualista VARCHAR(100) NOT NULL,
    emergencia_medica VARCHAR(100) NOT NULL,
    enfermedad VARCHAR(255) NOT NULL,
    aptitud_fisica VARCHAR(255),
    cedula VARCHAR(255)
);

-- Tabla para el registro de usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



