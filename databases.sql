CREATE TABLE roles
(
    id_rol INT NOT NULL CHECK(id_rol > 0),
    rol_name VARCHAR(255) NOT NULL,
    PRIMARY KEY(id_rol)
);
INSERT INTO rol VALUES(1,'sg-sst');
INSERT INTO rol VALUES(2,'cocola');
INSERT INTO rol VALUES(3,'copasst');
INSERT INTO rol VALUES(4,'be');


--users

CREATE TABLE users
(
	usuarioId INT NOT NULL,
	nombreUsuario VARCHAR(255) NOT NULL,
  nombre VARCHAR(255) NOT NULL,
  apellido VARCHAR(255) NOT NULL,
  cedula int(10) NOT NULL,
  telefono int(10) NOT NULL,
  celular int(10) NOT NULL,
  dirección VARCHAR(255) NOT NULL,
  contraseña VARCHAR(255) NOT NULL,
  rolId int(255) NOT NULL,
	foto VARCHAR(255),
	email VARCHAR(255),
	PRIMARY KEY (usuarioID),
	FOREIGN KEY (rolId) REFERENCES roles(id_rol)
)

-- encargado sgsst
CREATE TABLE encargados_sgsst
(
	encargadoId INT NOT NULL,
	nombreEncargado VARCHAR(255) NOT NULL,
  apellidoEncargado VARCHAR(255) NOT NULL,
  cedula int(10) NOT NULL,
  nivelEstudios VARCHAR(255) NOT NULL,
  hojaVida VARCHAR(255) NOT NULL,
  diploma VARCHAR(255) NOT NULL,
  certificadoCurso50h VARCHAR(255) NOT NULL,
  certificadoSeccionalSalud VARCHAR(255) NOT NULL,

	PRIMARY KEY (encargadoId)
);

INSERT INTO `encargados_sgsst` (`encargadoId`, `nombreEncargado`, `apellidoEncargado`, `cedula`, `nivelEstudios`, `hojaVida`, `diploma`, `certificadoCurso50h`, `certificadoSeccionalSalud`) VALUES ('1', 'Encargado1nombretest', 'Encargado1Apellidotest', '1234567', 'encargado1niveldeestudiostest', 'encargado1hojadevidatest', 'encargado1diplomatest', 'encargado1certificadotest', 'encargado1seccionaltest');
