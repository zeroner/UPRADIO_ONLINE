DROP DATABASE IF EXISTS upradio_bd;
CREATE DATABASE upradio_bd;

USE upradio_bd;

DROP TABLE IF EXISTS website;
CREATE TABLE website (
	dominio VARCHAR(100),
	titulo VARCHAR(50),
    eslogan VARCHAR(100),
    logo VARCHAR(100),
    color VARCHAR(50),
    dir VARCHAR(150),
    tel VARCHAR(15),
    email VARCHAR(100),
    redes_sociales TEXT
);

DROP TABLE IF EXISTS secciones;
CREATE TABLE secciones (
	id_seccion INT AUTO_INCREMENT,
    nom_seccion VARCHAR(50) NOT NULL,
    PRIMARY KEY(id_seccion)
);

DROP TABLE IF EXISTS sliders;
CREATE TABLE sliders (
	id_slider INT AUTO_INCREMENT,
    id_seccion INT,
    img VARCHAR(150),
    texto_titulo VARCHAR(25),
    CONSTRAINT fk_idseccionsliders FOREIGN KEY (id_seccion) REFERENCES secciones(id_seccion),
    PRIMARY KEY (id_slider)
);

DROP TABLE IF EXISTS eventos;
CREATE TABLE eventos(
	id_evento INT AUTO_INCREMENT,
    id_seccion INT,
    tiempo_rest TIME,
    categoria VARCHAR(50),
    titulo VARCHAR (50),
    contenido TEXT,
    fecha_pub DATE,
    inscripciones VARCHAR(20),
    img VARCHAR(150),
    no_inscritos INT,
    no_max_inscritos INT,
    CONSTRAINT fk_idseccioneventos FOREIGN KEY (id_seccion) REFERENCES secciones(id_seccion),
    PRIMARY KEY (id_evento)
);

DROP TABLE IF EXISTS inscritos_eventos;
CREATE TABLE inscritos_eventos(
	id_inscrito INT AUTO_INCREMENT,
    id_evento INT,
    nombre VARCHAR(100),
    tel VARCHAR(15),
    email VARCHAR(50),
    CONSTRAINT fk_idinscritosevento FOREIGN KEY (id_evento) REFERENCES eventos(id_evento),
    PRIMARY KEY (id_inscrito)
);

DROP TABLE IF EXISTS integrantes;
CREATE TABLE integrantes(
	id_integrante INT AUTO_INCREMENT,
    id_seccion INT,
    nombres VARCHAR(50),
    apellido_p VARCHAR(50),
    apellido_m VARCHAR(50),
    foto VARCHAR(50),
    descripcion VARCHAR(200),
    fb VARCHAR(150),
    tw VARCHAR(150),
    email VARCHAR(100),
    CONSTRAINT fk_idseccionintegrantes FOREIGN KEY (id_seccion) REFERENCES secciones(id_seccion),
    PRIMARY KEY (id_integrante)
);

DROP TABLE IF EXISTS nosotros;
CREATE TABLE nosotros (
	id_seccion INT,
    foto VARCHAR(50),
    citado VARCHAR(100),
    contenido TEXT,
    CONSTRAINT fk_idseccionnosotros FOREIGN KEY (id_seccion) REFERENCES secciones(id_seccion)
);

DROP TABLE IF EXISTS categorias_podcasts;
CREATE TABLE categorias_podcasts (
	id_categoria INT AUTO_INCREMENT,
    id_seccion INT,
    titulo VARCHAR(50),
    img VARCHAR(50),
    autores VARCHAR(100),
    descripcion VARCHAR(150),
    descarga VARCHAR(150),
    categoria VARCHAR(100),
    CONSTRAINT fk_idseccioncategoriasp FOREIGN KEY (id_seccion) REFERENCES secciones(id_seccion),
    PRIMARY KEY (id_categoria)
);

DROP TABLE IF EXISTS podcasts;
CREATE TABLE podcasts (
	id_podcast INT AUTO_INCREMENT,
    id_categoria INT,
    titulo VARCHAR(50),
    podcast VARCHAR(50),
    CONSTRAINT fk_idcategoriaspodcasts FOREIGN KEY (id_categoria) REFERENCES categorias_podcasts(id_categoria),
    PRIMARY KEY (id_podcast)
);

DROP TABLE IF EXISTS programas;
CREATE TABLE programas(
	id_programa INT AUTO_INCREMENT,
    id_seccion INT,
    titulo VARCHAR(50),
    subtitulo VARCHAR(50),
    img VARCHAR(50),
    interesados INT,
    CONSTRAINT fk_idseccionprogramas FOREIGN KEY (id_seccion) REFERENCES secciones(id_seccion),
    PRIMARY KEY (id_programa)
);

DROP TABLE IF EXISTS programas_integrantes;
CREATE TABLE programas_integrantes(
	id_programa INT,
    id_integrante INT,
    CONSTRAINT fk_programaintegrante FOREIGN KEY (id_programa) REFERENCES programas(id_programa),
    CONSTRAINT fk_integranteprograma FOREIGN KEY (id_integrante) REFERENCES integrantes(id_integrante)
);

DROP TABLE IF EXISTS programas_invitados;
CREATE TABLE programas_invitados(
	id_invitado INT AUTO_INCREMENT,
    id_programa INT,
    nombre VARCHAR(50),
    apellido_p VARCHAR(50),
    apellido_m VARCHAR(50),
    tel VARCHAR(15),
    email VARCHAR(100),
    CONSTRAINT fk_programainvitado FOREIGN KEY (id_programa) REFERENCES programas(id_programa),
    PRIMARY KEY (id_invitado)
);

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios(
	id_user INT AUTO_INCREMENT,
    email VARCHAR(100),
    pass VARCHAR(18),
    privilegios VARCHAR(30),
    nombres VARCHAR(60),
    apellido_p VARCHAR(50),
    apellido_m VARCHAR(50),
    fecha_nac DATE,
    tel VARCHAR(15),
    fecha_reg DATETIME,
    
    PRIMARY KEY (id_user)
);