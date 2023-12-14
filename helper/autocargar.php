<?php
    function autocargar($clase){
        $entities=$_SERVER['DOCUMENT_ROOT']."/Becas/entities/".$clase.'.php';
        $repositorio=$_SERVER['DOCUMENT_ROOT']."/Becas/repository/".$clase.'.php';
        $db=$_SERVER['DOCUMENT_ROOT']."/Becas/db/".$clase.'.php';

        if(file_exists($entities)){
            require_once $entities;
        }else if(file_exists($repositorio)){
            require_once $repositorio;
            
        }else if(file_exists($db)){ 
            require_once $db;
        }else{
            var_dump($repositorio);
        }
    };


    class_exists('db');

    spl_autoload_register('autocargar');
?>