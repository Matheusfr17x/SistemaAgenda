<?php

    $dbHost='Localhost';
    $dbUsername='root';
    $dbPassword='';
    $dbName='bd_sistemaagenda';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno){
    //    echo "erro";
    //}
    //else{
    //    echo"conexao com sucesso";
    //}


?>