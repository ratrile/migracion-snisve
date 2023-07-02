<?php

class conexionMysql{
    public $conexionM;

    //public $dbpath = "E:\\proyecto sala stc\\migracion php\\snis2023.mdb";// no sirve aqui esto
    
    function conectarM(){
    $host = '127.0.0.1';
    $dbname = 'snis_migra_1';
    $username = 'root';
    $password = '';
    try {
        $conexionM = mysqli_connect($host, $username, $password,$dbname);
    } catch (PDOException $e){
        echo $e->getMessage();
    }
        return $conexionM;
    }
// ver como se desconecta de mysql
    public function desconectar()    {
     odbc_close( $this->$conexionM);
     echo 'Conexion a ['.$this->dbpath.'] : Terminado ';
    }
}

?>