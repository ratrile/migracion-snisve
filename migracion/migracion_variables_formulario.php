<?php
require_once('conexion/conexionAccess.php');
require_once('conexion/conexionMysql.php');  

class migracion_variable{

    function migrar_variable($dbpath){ 
    $sql = "SELECT 
	            tf2.codsubvar, 
	            tf.idgestion,
	            tf.codform,
	            tf.codgrup,
	            tf.desgrup,
	            tf.desabrev,
	            tf.genero,
	            tf.vigente as vigente_grup,
	            tf2.codvariabl,
	            tf2.desvariabl,
	            tf2.ordenvar,
	            tf2.vigente as vigente_var,
	            tf2.bloqueo
            from t_formgrup tf 
            inner join .t_formsubvar tf2 
            on tf.codgrup = tf2.codgrup 
            where  tf.idgestion  = tf2.idgestion
            	and tf.codform  = tf2.codform ; ";

   $conectar  = new conexionAccess;
   $stmt = $conectar->conectar($dbpath)->prepare($sql);

   $stmt->setFetchMode(PDO::FETCH_ASSOC);
   $stmt->execute();

   $conexionMy = new conexionMysql;
   $dbMysql = $conexionMy-> conectarM();
   $arr = $stmt->fetchAll();
    foreach ($arr as $key => $value) {
     $insertar = "INSERT INTO t_variables_form  
                     (codsubvar, idgestion, codform, codgrup, desgrup, desabrev, genero,
                     vigente_grup, codvariabl, desvariabl, ordenva, vigente_var, bloqueo) 
                     VALUES ('$value[codsubvar]','$value[idgestion]','$value[codform]','$value[codgrup]',
                             '".str_replace("'","\'","$value[desgrup]")."','".str_replace("'","\'","$value[desabrev]")."',
                             '$value[genero]','$value[vigente_grup]','$value[codvariabl]','".str_replace("'","\'","$value[desvariabl]")."',
                             '$value[ordenvar]','$value[vigente_var]','$value[bloqueo]')";

     $final = mysqli_query($dbMysql, $insertar);
     if (!$final){
        echo "<pre>";
         print_r(mysqli_error($dbMysql));} 
     }
    }
}

?>