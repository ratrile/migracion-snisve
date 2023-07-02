<?php

class conexionAccess{
    public $conexionA;

    //$dbpath = "E:\\proyecto sala stc\\migracion php\\snis2023.mdb";
    function conectar($dbpath){
        //$dbpath = "";
        //$dbpath = "E:\\proyecto sala stc\\migracion php\\snismain.mdb";
        if(!file_exists($dbpath))
        {
         die('no existe archivo');
        }
    
        try {
            $conexionA = new PDO ("odbc:DRIVER={Microsoft Access Driver (*.mdb)}; Dbq=$dbpath; Uid=; Pwd=96541237");
            //echo $db;
            $conexionA->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo $e->getMessage();
        }
        //echo $dbpath;
        return  $conexionA;
    }

    public function desconectar()    {
     $dbpath = "E:\\proyecto sala stc\\migracion php\\snis2023.mdb";
     odbc_close( $this->$conexionA);
     echo 'Conexion a ['.$dbpath.'] : Terminado ';
    }
}

?>