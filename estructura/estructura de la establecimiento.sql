create table t_establecimientos
(
    codestabl int,              ## codigo delestablecimiento
    corr_estgest int,           ## coorelativo getion establecimeto
    idgestion int,              ## gestion
    coddepto int,               ## codigo de departamento
    nomdepto varchar(100),      ## nombre del departamento
    codprovi int,               ## codigo de la provincia
    nomprovi VARCHAR(100),      ## nombre de la provincia
    codmunicip int,             ## codigo del municipio
    nommunicip varchar(100),    ## nombre municipio
    codarea int,                ## codigo area
    nomarea VARCHAR(100),       ## descripcion area
    nomestabl VARCHAR(100),     ## nombre del establecimiento
    codUrbRur varchar(10),      ## codigo urbano
    codclsest VARCHAR(10),      ## codigo de clase del establecimiento
    NOMCLSEST varchar(100),     ## nombre de categoria del establecimiento
    codinstit int,              ## codigo institucion 
    NOMINSTIT varchar(100),     ## nombre institucion
    codcatest varchar(10),      ## codigo categoria establecimiento
    NOMCATEST VARCHAR(50),      ## nombre categoria establecimiento
    codsubsec int,              ## codigo sub secuencia
    NOMSUBSEC VARCHAR(50),      ## nombre su secuencia
    num_camas int,              ## numero de camas
    bajalogica VARCHAR(10),     ## baja logicas si o no 
    PRIMARY KEY (codestabl, corr_estgest)
);