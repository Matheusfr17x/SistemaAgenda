<?php

if(!empty($_GET['id']))
{

    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect= "SELECT * FROM reunioes WHERE idreuniao=$id";
    
    $result=$conexao->query($sqlSelect);

   if($result->num_rows>0){

        while($user_data=mysqli_fetch_assoc($result)){
            $autor= $user_data['autor'];
            $titulo=$user_data['titulo'];
            $datas=$user_data['datas'];
            $horasInicio=$user_data['horasInicio'];
            $duracao=$user_data['duracao'];
            $localizacao=$user_data['localizacao'];
            $descricao=$user_data['descricao'];
        }
      
    }
    else{
        header('Location: sistema.php');
    }

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
        <form action="saveEdit.php" method="POST">
            <fieldset>
                <legend><b>Reunião</b></legend>
                <br>
                <div class="inputBox">
                        <input type="text" name="autor" id="idAutor" class="inputUser" value="<?php echo $autor ?>"required>
                        <label for="Autor" class="labelInput" >Autor</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="titulo" id="idTitulo" class="inputUser" value="<?php echo $titulo ?>" required>
                        <label for="Titulo" class="labelInput" >Titulo da Reunião</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <div class="data">
                            <input type="date" name="datas" id="idDatas" class="inputUser" value="<?php echo $datas ?>" required>
                            <label for="Datas" class="labelInput">Datas</label>  
                    
                        </div>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="time" name="horasInicio" id="idhorasInicio" class="inputUser" value="<?php echo $horasInicio ?>" required>
                        <label for="horasInicio" class="labelInput">horasInicio</label>  
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="time" name="duracao" id="idDuracao" class="inputUser" value="<?php echo $duracao ?>" required>
                        <label for="Duracao" class="labelInput" >Duração</label>  
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="search" id="localizacao" name="localizacao" class="inputUser" value="<?php echo $localizacao ?>" autocomplete="on" autofocus required>
                        <label for="localizacao" class="labelInput" >localizacão</label>
                    </div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="descricao" id="idDescricao" class="inputUser"  value="<?php echo $descricao ?>" required>
                        <label for="Descricao" class="labelInput" >Descrição</label>  
                    </div>
                    <br><br>
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="submit"  name="update" id="idSubmit" >
            </fieldset>
        </form>
    </div>
</body>
</html>