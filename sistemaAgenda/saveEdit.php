<?php

    include_once('config.php');
    
    if(isset($_POST['update'])){

        $id=$_POST['id'];
        $autor= $_POST['autor'];
        $titulo=$_POST['titulo'];
        $datas=$_POST['datas'];
        $horasInicio=$_POST['horasInicio'];
        $duracao=$_POST['duracao'];
        $localizacao=$_POST['localizacao'];
        $descricao=$_POST['descricao'];
        

 

        $sql = "UPDATE reunioes SET autor = '$autor', titulo = '$titulo', datas = '$datas', horasInicio = '$horasInicio', duracao = '$duracao', localizacao = '$localizacao', descricao = '$descricao' WHERE idreuniao = '$id'";
    
        $result=$conexao->query($sql);
    }
    
    // Fecha a conexão com o banco de dados
    mysqli_close($conexao);
    
    header('Location:sistema.php');
    
    ?>