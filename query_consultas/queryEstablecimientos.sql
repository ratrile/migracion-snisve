SELECT 
    t_Depto.coddepto, 
    t_Depto.nomdepto, 
    t_Provincia.codprovi, 
    t_Provincia.nomprovi, 
    t_Municipio.codmunicip, 
    t_Municipio.nommunicip, 
    t_area.codarea, 
    t_area.nomarea, 
    t_EstabGest.corr_estgest, 
    t_EstabGest.codestabl, 
    t_EstabGest.nomestabl, 
    t_EstabGest.codUrbRur, 
    t_clsestab.codclsest, 
    t_clsestab.NOMCLSEST, 
    t_instit.codinstit, 
    t_instit.NOMINSTIT, 
    t_catestab.codcatest, 
    t_subsec.codsubsec, 
    t_catestab.NOMCATEST, 
    t_subsec.NOMSUBSEC, 
    t_EstabGest.num_camas, 
    t_Gestion.idgestion, 
    t_EstabGest.bajalogica
FROM (t_subsec INNER JOIN t_instit ON t_subsec.codsubsec = t_instit.codsubsec) 
INNER JOIN ((t_catestab INNER JOIN t_clsestab ON t_catestab.codcatest = t_clsestab.codcatest) 
INNER JOIN (t_Provincia 
    INNER JOIN ((t_Gestion INNER JOIN t_municipioarea ON t_Gestion.idgestion = t_municipioarea.idgestion) 
    INNER JOIN ((t_Depto INNER JOIN (t_estblmto 
        INNER JOIN ((t_EstabGest INNER JOIN t_Municipio ON t_EstabGest.codmunicip = t_Municipio.codmunicip) 
        INNER JOIN t_area ON t_EstabGest.codarea = t_area.codarea) 
        ON (t_estblmto.codestabl = t_EstabGest.codestabl) 
            AND (t_estblmto.codestabl = t_EstabGest.codestabl)) 
        ON t_Depto.coddepto = t_area.coddepto) 
        
        INNER JOIN t_AreaGest ON t_area.codarea = t_AreaGest.codarea )
        ON (t_Gestion.idgestion = t_AreaGest.idgestion) 
            AND (t_municipioarea.idgestion = t_AreaGest.idgestion) 
                AND (t_municipioarea.codarea = t_AreaGest.codarea) 
                AND (t_municipioarea.codmunicip = t_Municipio.codmunicip) 
                AND (t_municipioarea.codmunicip = t_EstabGest.codmunicip) 
                AND (t_municipioarea.idgestion = t_EstabGest.idgestion) 
                AND (t_municipioarea.codarea = t_EstabGest.codarea)) 
    ON (t_Provincia.codprovi = t_Municipio.codprovi) 
        AND (t_Provincia.coddepto = t_Depto.coddepto)) 
    ON t_clsestab.codclsest = t_EstabGest.codclsest) 
    ON t_instit.codinstit = t_EstabGest.codinstit
    where  (t_Depto.coddepto = '7') ;
