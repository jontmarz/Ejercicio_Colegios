CREATE database IF NOT exists Colegios;

-- Crear la tabla Colegios
CREATE TABLE t_colegios (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    school_name VARCHAR(100) NOT NULL,
    sch_address VARCHAR(100) NOT NULL,
    neighborhood VARCHAR(100) NOT NULL
);

-- Crear la tabla Niños
CREATE TABLE t_estudiantes (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    stu_address VARCHAR(100) NOT NULL,
    school_related  INT NOT NULL,
    FOREIGN KEY (school_related ) REFERENCES t_colegios(ID)
);