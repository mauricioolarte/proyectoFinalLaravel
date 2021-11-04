CREATE TABLE roles
(
    id_rol INT NOT NULL CHECK(id_rol > 0) AUTO_INCREMENT,
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
	usuarioId INT NOT NULL AUTO_INCREMENT,
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
	id INT NOT NULL AUTO_INCREMENT,
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



-- configuracion empresa

CREATE TABLE configuracion_empresas
(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(255) NOT NULL,
  nit VARCHAR(255) NOT NULL,
  georre_longitude float NOT NULL,
  georre_latitude float NOT NULL,
  actividadEconomica VARCHAR(255) NOT NULL,
  nivelRiesgo VARCHAR(255) NOT NULL,
	cantidadEmpleado INT NOT NULL,
	naturalezaJuridica VARCHAR(255) NOT NULL,
  telefonos VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  tipoEmpresa VARCHAR(255) NOT NULL,

	PRIMARY KEY (id)
);


INSERT INTO `configuracion_empresas` (`id`, `nombre`, `nit`, `georre_longitude`, `georre_latitude`, `actividadEconomica`, `nivelRiesgo`, `cantidadEmpleado`, `naturalezaJuridica`, `telefonos`, `email`, `tipoEmpresa`) VALUES (NULL, 'testNombre', '123456789', '124.123456', '-123.123456', 'testActividadEconomica', 'testNivelRiesgo', '1', 'testNaturalezaJuridica', 'testTelefono', 'testEmail', 'testTipoEmpresa');


--Riesgos Psicosociales
CREATE TABLE riesgos_psicosociales
(
	id INT NOT NULL AUTO_INCREMENT,
	nombreDoc  VARCHAR(255) NOT NULL,
	updated_at TIMESTAMP,
	created_at TIMESTAMP,
	PRIMARY KEY (id)
);

INSERT INTO `riesgos_psicosociales` (`id`, `nombreDoc`, `updated_at`, `created_at`) VALUES ('1', 'documento por crear', current_timestamp(), '0000-00-00 00:00:00.000000');

--plan emergencia
CREATE TABLE plan_emergencia
(
	id INT NOT NULL AUTO_INCREMENT,
	nombreDoc  VARCHAR(255) NOT NULL,
	updated_at TIMESTAMP,
	created_at TIMESTAMP,
	PRIMARY KEY (id)
);

INSERT INTO `plan_emergencia` (`id`, `nombreDoc`, `updated_at`, `created_at`) VALUES ('1', 'documento por crear', current_timestamp(), '0000-00-00 00:00:00.000000');