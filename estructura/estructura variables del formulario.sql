create table t_variables_form
(
    codsubvar int,              ##codigo subvar
    idgestion int,              ##gestion
    codform int,                ##codigo formulario
    codgrup int,                ##codigo grupo del formulario
    desgrup varchar(100),       ##descripcion del grupo del formulario
    desabrev varchar(50),       ##descripcion breve del grupo del formulario
    genero VARCHAR(5),          ##describe el si ambos o solo mujeres
    vigente_grup varchar(5),    ##vigencia del grupo
    codvariabl int,             ##codigo de la variable del grupo
    desvariabl varchar(100),    ##descripcion de la variable
    ordenva int,                ##orden de la variable
    vigente_var VARCHAR(5),     ##vigencia de la variable
    bloqueo varchar(5),         ##bloqueo S/N
    PRIMARY KEY (codsubvar, idgestion, codvariabl)
);