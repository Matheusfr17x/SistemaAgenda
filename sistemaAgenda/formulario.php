<?php

if(isset($_POST['submit']))
{
   //  print_r('Autor: '.$_POST['nome']);
    //  print_r('<br>');
    // print_r('tema : '.$_POST['titulo']);
    //  print_r('<br>');
    //  print_r('data: '.$_POST['data']);
    // print_r('<br>');

    //print_r('inicio: '.$_POST['inicio']);
    //print_r('<br>');
    //print_r('duraçao : '.$_POST['duraçao']);
    // print_r('<br>');
    // print_r('localizacao: '.$_POST['localizacao']);
    // print_r('<br>');
    //  print_r('descricao: '.$_POST['descricao']);
    // print_r('<br>');
    include_once('config.php');

    $autor= $_POST['autor'];
    $titulo=$_POST['titulo'];
    $datas=$_POST['datas'];
    $horasInicio=$_POST['horasInicio'];
    $duracao=$_POST['duracao'];
    $localizacao=$_POST['localizacao'];
    $descricao=$_POST['descricao'];
   
    $result = mysqli_query($conexao, "INSERT INTO reunioes (`autor`, `titulo`, `datas`, `horasInicio`, `duracao`, `localizacao`, `descricao`) 
    VALUES ('$autor', '$titulo', '$datas', '$horasInicio', '$duracao', '$localizacao', '$descricao')");
    header('Location: sistema.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styleformulario.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de tarefas</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Reunião</b></legend>
                <br>
                <div class="inputBox">
                        <input type="text" name="autor" id="idautor" class="inputUser" required>
                        <label for="Autor" class="labelInput" >Autor</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="titulo" id="idTitulo" class="inputUser" required>
                        <label for="Titulo" class="labelInput" >Titulo da Reunião</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <div class="data">
                            <input type="date" name="datas" id="idDatas" class="inputUser" required>
                            <label for="datas" class="labelInput"></label>  
                    
                        </div>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="time" name="horasInicio" id="idHorasInicio" class="inputUser" required>
                        <label for="horasInicio" class="labelInput">Inicio</label>  
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="time" name="duracao" id="idDuracao" class="inputUser" required>
                        <label for="Duracao" class="labelInput" >Duração</label>  
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="search" id="localizacao" name="localizacao" class="inputUser" autocomplete="on" autofocus required>
                        <label for="localizacao" class="labelInput" >localizacão</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="descricao" id="idDescricao" class="inputUser" required>
                        <label for="Descricao" class="labelInput" >Descrição</label>  
                    </div>
                    <br><br>
                    <input type="submit"  name="submit" id="idSubmit" >
            </fieldset>
        </form>
       
    </div>
   
        <img src="img/Events-bro.png" alt="">
    
</body>
</html>