create database aulaConocimiento;

use aulaConocimiento;

create table Ente(
	Ente_ID int not null AUTO_INCREMENT,
	Nombre varchar(255) not null,
	Apellido varchar(255) not null,
	FechaNacimiento date not null,
    activo boolean DEFAULT 1,
    PRIMARY KEY (Ente_ID)
);

create table Usuario(
	Usuario_ID int not null AUTO_INCREMENT,
	Ente_ID int,
	Username varchar(255) not null,
	Password varchar(255) not null,
	Rol int not null,
	activo Boolean DEFAULT 1,
	PRIMARY KEY (Usuario_ID),
	FOREIGN KEY (Ente_ID) references Ente(Ente_ID)
);