<?php
session_start();
include_once('config.php');

if ((!isset($_SESSION['email'])) && (!isset($_SESSION['senha']))) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: index.php');
}

$logado = $_SESSION['email'];

$start_date = '2023-06-26';
$end_date = '2023-06-26';

$sql = "SELECT * FROM reunioes WHERE datas BETWEEN '$start_date' AND '$end_date' ORDER BY idreuniao DESC";

$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sistema.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Pagina Inicial</title>
    
</head>

<style>
    .modal{
        width: 300px;

    }
    .modal-content{
        width: 300px;
    }
    body{
    
        background: #201b2c;
    
        text-align: center;
    }

    .table-bg{

        background: rgba(255, 255, 255,0.9);
        border-radius: 3px 3px 0 0;
    }
    
    .list-group-item:hover{
        background-color: rgba(59, 57, 57, 0.164)!important;
    }

</style>
<body>

<!-- Imagem e texto -->
    <nav class="navbar navbar-light bg-light">
        
            <a class="navbar-brand" href="#">
            <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="navbar-toggler-icon"></span>
            </button>
                <class="d-inline-block align-top" alt="">
              Agenda Sistemis
           
      
        <div class="d-flex">
            <a href="sair.php" class= "btn btn-danger me-5">Sair</a>
            </a>
        </div>
    </nav>

    <!--   nav bar-->

    <nav class="navbar ">
        <div class="container-fluid">
          
           

        </div>
    </nav>
    <!------->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Menu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <ul class="list-group list-group-flush">
                <button class="list-group-item list-group-item-action" onclick="window.location.href = 'paginainicial.php';">Paginia Inicial</button>
                <button class="list-group-item list-group-item-action" onclick="window.location.href = 'compromissoshoje.php';">Compromissos de hoje</button>
                <button class="list-group-item list-group-item-action" onclick="window.location.href = 'compromissosSemana.php';">Compromissos da semana</button>
                <button class="list-group-item list-group-item-action" onclick="window.location.href = 'compromissosMes.php';">Compromissos do mês</button>
                <button class="list-group-item list-group-item-action" onclick="window.location.href = 'compromissosSemestre.php';">Compromisso do semestre</button>
                <button class="list-group-item list-group-item-action" onclick="window.location.href = 'sistema.php';">Todos os Compromissos</button>
            </ul>
            </ul>
        </div>

        <div class="modal-footer">
           
         
        </div>
        </div>
    </div>
    </div>
      <!-- Boatao da navbar -->
      <p style="color: white; font-size: 300%;">Compromissos de Hoje</p>
    
    <div class="m-5">
        <table class="table text-black table-bg">
            <thead>
                <tr>
            
                <th scope="col">Palestrante</th>
                <th scope="col">Titulo</th>
                <th scope="col">Data</th>
                <th scope="col">Inicio</th>
                <th scope="col">Duração</th>
                <th scope="col">Localização</th>
                <th scope="col">Descrição</th>
                <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                      
                        echo"<tr>";
                        echo"<td>".$user_data['autor']."</td>";
                        echo"<td>".$user_data['titulo']."</td>";
                        echo"<td>".$user_data['datas']."</td>";
                        echo"<td>".$user_data['horasInicio']."</td>";
                        echo"<td>".$user_data['duracao']."</td>";
                        echo"<td>".$user_data['localizacao']."</td>";
                        echo"<td>".$user_data['descricao']."</td>";
                        echo"<td>
                            <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[idreuniao]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                                <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                            </svg>
                            </a>

                            <a  class='btn btn-sm btn-danger' href='delete.php?id=$user_data[idreuniao]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                                    <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                                </svg>
                            </a>
                               
                        
                            </td>";
                            
                            
                            
                        echo"</tr>";
                       
                    }
                    echo"<td>
                                
                    <a  class='btn btn-sm btn-primary' href='formulario.php?'>
                    Novo Compromisso
                    </a>
                    </td>";
                    
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>