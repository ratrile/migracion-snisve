<?php

require_once('conexion/conexionAccess.php');
require_once('conexion/conexionMysql.php');  
class migracion_datos{

    function formulario301($dbpath){ 
    //formulario 301
        $arrayDatos = [
            '301G01_DAT',
            '301G02_DAT',
            '301G03_DAT',
            '301G04_DAT',
            '301G05_DAT',
            '301G06_DAT',
            '301G07_DAT',
            '301G08_DAT',
            '301G09_DAT',
            '301G10_DAT',
            '301G11_DAT',
            '301G12_DAT',
            '301G13_DAT',
            '301G14_DAT',
            '301G15_DAT',
            '301G16_DAT',
            '301G17_DAT',
            '301G18_DAT',
            '301G19_DAT',
            '301G20_DAT',
            '301G21_DAT',
            '301G22_DAT',
            '301G23_DAT',
            '301G24_DAT',
            '301G25_DAT',
            '301G26_DAT',
            '301G27_DAT',
            '301G28_DAT',
            '301G29_DAT',
            '301G30_DAT',
            '301G31_DAT',
            '301G32_DAT',
            '301G33_DAT',
        ];
        foreach ($arrayDatos as $key => $tabla) {
        
            $sql = "SELECT idgestion, corr_estabgest, codsubvar, mes, V, M from ".$tabla." ;";
            $conectar  = new conexionAccess;
            $conexionMy = new conexionMysql;
            $dbMysql = $conexionMy-> conectarM();
        
            $stmt = $conectar->conectar($dbpath)->prepare($sql);

            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();

            $arr = $stmt->fetchAll();
            foreach ($arr as $key => $value) {
                $insertar = "INSERT INTO t_formulario_301 
                        (idgestion, corr_estabgest, codsubvar, mes, varon, mujer) 
                        VALUES ('$value[idgestion]','$value[corr_estabgest]','$value[codsubvar]','$value[mes]',
                                '$value[V]', '$value[M]') ";
            $final = mysqli_query($dbMysql, $insertar);
            if (!$final){
                echo "<pre>";
                print_r(mysqli_error($dbMysql));
                }
            }

        }
    }

    function formulario302($dbpath){ 
        //formulario 301
        $arrayDatos = [
            '302G01_DAT',
            '302G02_DAT',
            '302G03_DAT',
            '302G04_DAT',
            '302G05_DAT',
            '302G06_DAT',
            '302G07_DAT',
            '302G08_DAT',
            '302G09_DAT',
            '302G10_DAT',
            '302G11_DAT',
            '302G12_DAT',
            '302G13_DAT',
            '302G14_DAT',
            '302G15_DAT',
            '302G16_DAT',
            '302G17_DAT',
            '302G18_DAT',
            '302G19_DAT',
        ];
        foreach ($arrayDatos as $key => $tabla) {
        
            $sql = "SELECT idgestion, corr_estabgest, codsubvar, mes, V, M from ".$tabla." ;";
            $conectar  = new conexionAccess;
            $conexionMy = new conexionMysql;
            $dbMysql = $conexionMy-> conectarM();
        
            $stmt = $conectar->conectar($dbpath)->prepare($sql);
        
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
        
            $arr = $stmt->fetchAll();
            foreach ($arr as $key => $value) {
                $insertar = "INSERT INTO t_formulario_302 
                        (idgestion, corr_estabgest, codsubvar, mes, varon, mujer) 
                        VALUES ('$value[idgestion]','$value[corr_estabgest]','$value[codsubvar]','$value[mes]',
                                '$value[V]', '$value[M]') ";
            $final = mysqli_query($dbMysql, $insertar);
            if (!$final){
                echo "<pre>";
                print_r(mysqli_error($dbMysql));
                }
            }
        
        }
    }

    function formulario303($dbpath){ 
        //formulario 301
        $arrayDatos = [
            '303G01_DAT',
            '303G02_DAT',
            '303G03_DAT',
            '303G04_DAT',
            '303G05_DAT',
            '303G06_DAT',
            '303G07_DAT',
            '303G08_DAT',
            '303G09_DAT',
            '303G10_DAT',
            '303G11_DAT',
            '303G12_DAT',
            '303G13_DAT',
            '303G14_DAT',
            '303G15_DAT',
            '303G16_DAT',
            '303G17_DAT',
            '303G18_DAT',
            '303G19_DAT',
            '303G20_DAT',
            '303G21_DAT',
            '303G22_DAT',
            '303G23_DAT',
            '303G24_DAT',
            '303G25_DAT',
            '303G26_DAT',
            '303G27_DAT',
            '303G28_DAT',
        ];
        foreach ($arrayDatos as $key => $tabla) {
        
            $sql = "SELECT idgestion, corr_estabgest, codsubvar, mes, V, M from ".$tabla." ;";
            $conectar  = new conexionAccess;
            $conexionMy = new conexionMysql;
            $dbMysql = $conexionMy-> conectarM();
        
            $stmt = $conectar->conectar($dbpath)->prepare($sql);
        
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
        
            $arr = $stmt->fetchAll();
            foreach ($arr as $key => $value) {
                $insertar = "INSERT INTO t_formulario_303 
                        (idgestion, corr_estabgest, codsubvar, mes, varon, mujer) 
                        VALUES ('$value[idgestion]','$value[corr_estabgest]','$value[codsubvar]','$value[mes]',
                                '$value[V]', '$value[M]') ";
            $final = mysqli_query($dbMysql, $insertar);
            if (!$final){
                echo "<pre>";
                print_r(mysqli_error($dbMysql));
                }
            }
        }
    }
}
  
?>