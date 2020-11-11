CREATE DATABASE TrailerDB;

USE trailerdb;

CREATE TABLE Usuario
(
	idUsuario INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombreUsuario VARCHAR(20) NOT NULL,
    apellidoPaterno VARCHAR(20) NOT NULL,
    apellidoMaterno VARCHAR(20) NOT NULL,
    username VARCHAR(50) NOT NULL,
    passwordUsuario VARCHAR(20) NOT NULL,
    tipoUsuario INT NOT NULL DEFAULT 1,
    activo BIT NOT NULL DEFAULT 1
);

CREATE TABLE Trailer
(
	idTrailer INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    titulo VARCHAR(50) NOT NULL,
    contenido TEXT NOT NULL,
    fechaPublicacion DATETIME DEFAULT NOW(),
    activo BIT NOT NULL DEFAULT 0
);

CREATE TABLE Imagen 
(
	idImagen INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombreImagen VARCHAR(50) NOT NULL,
    url MEDIUMBLOB NOT NULL,
    idTrailer_Imagen INT UNSIGNED NOT NULL,
    CONSTRAINT fk_Imagen_Trailer
    FOREIGN KEY (idTrailer_Imagen)
    REFERENCES Trailer(idTrailer)
);

CREATE TABLE Video 
(
	idVideo INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nombreVideo VARCHAR(50) NOT NULL,
    url VARCHAR(255) NOT NULL,
    idTrailer_Video INT UNSIGNED NOT NULL,
    CONSTRAINT fk_Video_Trailer
    FOREIGN KEY (idTrailer_Video)
    REFERENCES Trailer(idTrailer)
);

ALTER TABLE Usuario ADD idImagen_Usuario INT UNSIGNED NOT NULL;
ALTER TABLE Usuario ADD CONSTRAINT fk_Usuario_imagen FOREIGN KEY(idImagen_Usuario) REFERENCES Imagen(idImagen);

ALTER TABLE Trailer ADD idUsuario_Trailer INT UNSIGNED NOT NULL;
ALTER TABLE Trailer ADD CONSTRAINT fk_Usuario_Trailer FOREIGN KEY(idUsuario_Trailer) REFERENCES Usuario(idUsuario);

CREATE TABLE Comentario
(
	idComentario INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
    contenidoComentario TEXT NOT NULL,
    fechaPublicacionComentario DATETIME DEFAULT NOW(),
    activo BIT NOT NULL DEFAULT 1,
    idTrailer_Comentario INT UNSIGNED NOT NULL,
    CONSTRAINT fk_Comentario_Trailer
    FOREIGN KEY (idTrailer_Comentario)
    REFERENCES Trailer(idTrailer),
    idUsuario_Comentario INT UNSIGNED NOT NULL,
    CONSTRAINT fk_Comentario_Usuario
    FOREIGN KEY (idUsuario_Comentario)
    REFERENCES Usuario(idUsuario)
);