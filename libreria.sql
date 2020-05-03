/* nuestra base de datos se llama libreriaDb*/
CREATE DATABASE libreriaBictia CHARACTER SET utf8 COLLATE utf8_unicode_ci;
/*llamamos la base de datos*/
USE LibreriaBictia;
/* creamos la tabla registro, que se usa para los usuarios nuevos*/
CREATE TABLE registros(
	idRegistros INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	correo     VARCHAR (255),
	contrasena  VARCHAR (255)
);

/* creamos la tabla usuario, que es donde van los datos principales de cada usuario*/
CREATE TABLE usuarios(
	idUsuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre   VARCHAR(255),
    apellido VARCHAR(255),
    genero VARCHAR(255),
    fechaNacimiento VARCHAR (255),
    idEstado INT,
    idTipoUsuario INT,
    idRegistros INT
);

/*creamos la tabla inicioSesion*/
CREATE TABLE inicioSesion(
	idInicioSesion INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    correo VARCHAR(255),
    contrasena VARCHAR(255)  
);

/* creamos la tabla estado, esta tiene dos valores Activo o inactivo*/
CREATE TABLE estado(
    idEstado INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    estado VARCHAR(128)
);
/* colocamos los valores de la tabla estado*/
INSERT INTO estado (estado) VALUES ('Activo'),('inactivo');
/* creamos la tabla libro, que se es el producto que vamos a vender*/

/* creamos la tabla tipoUsuario, puede ser: sudo,administrador,comprador*/
CREATE TABLE tipoUsuarios(
    idTipoUsuario int not null AUTO_INCREMENT PRIMARY KEY,
    roll varchar(255),
    idEstado INT
);
/* insertamos los datos en la tabla tipoUsuarios*/
INSERT INTO tipoUsuarios (roll,idEstado) VALUES ('Sudo',1),('Administrador',1),('Comprador',1);

/* creamos la tabla comprasUsuario*/
CREATE TABLE comprasUsuarios(
	idComprasUsuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fechaVenta    VARCHAR (255),
	totalVenta    VARCHAR (255),
	descripcion   VARCHAR (255),
    formadepago INT,
    idUsuario INT,
    idLibro  INT,
    idEstado INT
);
/*creamos la tabla libros, los libros son nuestro producto a vender*/
CREATE TABLE libros(
	idLibro   INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nombre     VARCHAR(255),
    autor    VARCHAR(255),
    editorial    VARCHAR(255),
    existencias INT,
    precio  INT,
    idCategoria INT,
    idSubcategoria INT,
    idEstado INT
);
/* creamos la tabla categorias*/
CREATE TABLE categorias(
    idCategorias INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descripcionCate INT,
    idEstado INT
);

CREATE TABLE subCategorias(
    idsubCategorias INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    subcategoria VARCHAR(255),
    idEstado INT
);
/* uniones registros*/
ALTER TABLE usuarios ADD CONSTRAINT fk_registro FOREIGN KEY (idRegistros) REFERENCES registros (idRegistros) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE usuarios ADD CONSTRAINT fk_tipoUsuarios FOREIGN KEY (idTipoUsuario) REFERENCES tipoUsuarios (idTipoUsuario) ON DELETE CASCADE ON UPDATE CASCADE;

/* uniones usuarios*/
ALTER TABLE iniciosesion ADD CONSTRAINT fk_idusuario FOREIGN KEY (idInicioSesion) REFERENCES usuarios (idUsuario) ON DELETE CASCADE ON UPDATE CASCADE;
/* uniones de estado*/
ALTER TABLE usuarios ADD CONSTRAINT fk_idestado FOREIGN KEY (idEstado) REFERENCES estado (idEstado) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tipoUsuarios ADD CONSTRAINT fk_tipoUsuarioEst FOREIGN KEY (idEstado) REFERENCES estado (idEstado) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE comprasUsuarios ADD CONSTRAINT fk_comprasUsuarioEst FOREIGN KEY (idEstado) REFERENCES estado (idEstado) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE libros ADD CONSTRAINT fk_librosEst FOREIGN KEY (idEstado) REFERENCES estado (idEstado) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE categorias ADD CONSTRAINT fk_categoriasEst FOREIGN KEY (idEstado) REFERENCES estado (idEstado) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE subcategorias ADD CONSTRAINT fk_subcategoriasEst FOREIGN KEY (idEstado) REFERENCES estado (idEstado) ON DELETE CASCADE ON UPDATE CASCADE;

/* union de compras usuario*/
ALTER TABLE comprasUsuarios ADD CONSTRAINT fk_comprasUsuario FOREIGN KEY (idLibro) REFERENCES libros (idLibro) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE comprasUsuarios ADD CONSTRAINT fk_usuario FOREIGN KEY (idUsuario) REFERENCES usuarios (idUsuario) ON DELETE CASCADE ON UPDATE CASCADE;

/* union de libros */

ALTER TABLE libros ADD CONSTRAINT fk_categorias FOREIGN KEY (idCategoria) REFERENCES categorias (idCategorias) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE libros ADD CONSTRAINT fk_subcategorias FOREIGN KEY (idSubcategoria) REFERENCES subcategorias (idsubCategorias) ON DELETE CASCADE ON UPDATE CASCADE;

