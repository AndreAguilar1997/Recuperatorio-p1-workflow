create table FlujoProceso					
(
Flujo varchar(3),
Proceso varchar(3),
ProcesoSiguiente varchar(3),
Tipo varchar(1),
Pantalla varchar(20),
Rol varchar(20)
)

insert into FlujoProceso values('F1','P1','P2','I','Inicio','Cordinacion');
insert into FlujoProceso values('F1','P2','P3','P','Convocatoria','Cordinacion');
insert into FlujoProceso values('F1','P3','P4','P','PresMateria','Cordinacion');
insert into FlujoProceso values('F1','P4','P5','P','Preinscripcion','Alumno');
insert into FlujoProceso values('F1','P5','P6','P','Requisitos','Cordinacion');
insert into FlujoProceso values('F1','P6','P7','P','CPT','Alumno');
insert into FlujoProceso values('F1','P7',P8,'P','PresDocumentos','Alumno');
insert into FlujoProceso values('F1','P7',NULL,'C','RevRequi','Cordinacion');
insert into FlujoProceso values('F1','P8','P9','P','Habilitacion','Alumno');
insert into FlujoProceso values('F1','P9','P10','P','InicioClase','Alumno');
insert into FlujoProceso values('F1','P10',NULL,'P',NULL,NULL);


create table FlujoProcesoCondicionante
(			
Flujo varchar(3),
Proceso varchar(3),
ProcesoSI varchar(3),
ProcesoNO varchar(3)
)

insert into FlujoProceso values ('1234','juan morales apaza', '02', NULL, '123456', '2001-03-25');
12 maria flores 02 NULL 12548 1998-02-05
15 kevin ali 03 NULL 5548 1997-12-19
02 ale peres 04 NULL 12418 1999-11-02
18 rosa velasques 01 NULL 28448 2000-03-03
24 pedro apaza 02 NULL 12698 1999-05-21
14 carlos morales 08 NULL 154848 1998-08-15
