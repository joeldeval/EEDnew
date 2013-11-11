create database cutonala;
use database cutonala;
        create table Usuario(id int(10) not null Auto_increment primary key,
                              Nombre varchar(50) not null, Password varchar(50) not null );

        create table Sede(id int(10) not null Auto_increment primary key,
                              NombreSede varchar(50) not null, Ubicacion varchar(150) not null);

        create table Licenciatura(id int(10) not null Auto_increment primary key,
                                      NombreLicenciatura varchar(50) not null, id_sede int(10) not null,
                                      FOREIGN KEY (id_sede) REFERENCES Sede(id)) ENGINE=INNODB;

        create table Grupo(id int(10) not null Auto_increment primary key, Nombre varchar(5) not null,
                               Aula varchar(5) not null, id_Licenciatura int(10) not null,Turno varchar(5) not null,
                               FOREIGN KEY (id_Licenciatura) REFERENCES Licenciatura(id)) ENGINE=INNODB;

        create table Estudiante(id int(10) not null Auto_increment primary key,
                                    Codigo int(10) not null, Nombre varchar(30) not null, 
                                    Ap_Paterno varchar(20) not null, Ap_Materno varchar(20) not null,
                                    id_Grupo int(10) not null, id_Licenciatura int(10) not null,id_Sede int(10) not null,
                                    FOREIGN KEY (id_Grupo) REFERENCES Grupo(id),
                                    FOREIGN KEY (id_Sede) REFERENCES Sede(id),
                                    FOREIGN KEY (id_Licenciatura) REFERENCES Licenciatura (id)) ENGINE=INNODB;
        create table Urnas(id_Estudiante int(10) not null, voto int(2) not null, color varchar(15) not null, FOREIGN  KEY (id_Estudiante) REFERENCES Estudiante(id)) ENGINE=INNODB;
        create table Mesas(id_Licenciatura int(10) not null, Num_Mesa int(10) not null, FOREIGN KEY (id_Licenciatura) REFERENCES Licenciatura(id)) ENGINE=INNODB;

       
insert into Sede(NombreSede,Ubicacion) 
        values('Casa de la Cultura','www.google.com'),('Casa de la Cultura II','www.google'), ('Sillitas', 'www.google.com'),('Santa Paula', 'www.google.com');
insert into Licenciatura(NombreLicenciatura, id_sede)
        values('Lic. Salud Publica', '2'), ('Lic. Medico, Cirujano y Partero', '2'), ('Ing. Nanotecnologia', '1'),
              ('Ing. Energia', '1'), ('Ing. Ciencias Computacionales', '1'), ('Lic. Historia del Arte', '1'),
              ('Lic. Gerontologia', '2'), ('Lic. Estudios Liberales', '2'), ('Lic. Diseño de Artesanias', '4'),
              ('Lic. Contaduria Publica', '3'), ('Lic. Administracion de Negocios', '3'), ('Lic. Abogado', '3');
insert into Grupo(Nombre, Aula, id_Licenciatura, Turno)
        values('1ero', '6', '5', 'Matutino'), ('1ero', '6', '5', 'Vespertino'), ('2do', '5', '5', 'Matutino'),
              ('2do', '5', '5', 'Vespertino'), ('3ero', '4', '5', 'Vespertino'), ('3ero', '8', '5', 'Vespertino'),
              ('4to', '8', '5', 'Matutino'), ('4to', '4', '5', 'Matutino');


insert into Estudiante(Codigo, Nombre, Ap_Paterno, Ap_Materno, id_Grupo, id_Licenciatura, id_Sede) values('207630713', 'Joe Emmanuel', 'aldivia', 'Ramirez', '7', '5', '2');
insert into Urnas(id_Estudiante, voto, color) VALUES ('1','1','rojo');
insert into Mesas(id_Licenciatura, Num_Mesa) VALUES ('1','2');
insert into Usuario(Nombre, Password) values ('Joel', md5('joel'));

  

Alumnos que votaron(cuantos son):
select count(voto) as "Alumnos que votaron" from urnas where voto=1; 
Alumnos que NO votaron(cuantos son):
select count(voto) as "Alumnos que NO votaron" from urnas where voto=0; 
Total de alumnos:
select count(voto) as "Alumnos que NO votaron" from urnas;

Pag principal:

Seleccionar sede
select Codigo,Nombre,Ap_Paterno, Ap_Materno, voto FROM Estudiante,Sede where id_sede = sede.id AND sede.id=1;
Seleccionar licenciatura
select Codigo,Nombre,Ap_Paterno, Ap_Materno, voto FROM Estudiante,Licenciatura, WHERE id_Licenciatura=Licenciatura.id 
AND Licenciatura.id="numero de la licenciatura";
seleccionar Grupo y grado
select Codigo,Nombre,Ap_Paterno, Ap_Materno, voto FROM Estudiante,Grupo WHERE id_Grupo=Grupo.id;
selccionar turno
select Codigo,Nombre,Ap_Paterno, Ap_Materno, voto FROM Estudiante,Grupo WHERE id_Grupo=Grupo.id and turno="Matutino";