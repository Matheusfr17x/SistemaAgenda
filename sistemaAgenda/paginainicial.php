<?php
    session_start();
    include_once('config.php');
        //print_r($_SESSION);

    if((!isset($_SESSION['email'] ) == true) and (!isset($_SESSION['senha'])==true)){
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: index.php');
        }
    $logado=$_SESSION['email'];

    $sql= "SELECT * FROM reunioes ORDER BY idreuniao DESC";
        
    $result = $conexao->query($sql);
        
    //print_r($result);

?>

<!DOCTYPE html>
<head>
    <html lang="pt-BR">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="img/paginaInicialIcon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/stylePaginaInicial.css">
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
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: sans-serif;
}
header{
    padding: 20px 70px;
    background: #1d1d1f;
}
.navigation{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.navigation .logo{
    width: 50px;
}
.navigation ul{
    display: flex;
    align-items: center;
    gap: 60px;
}
.navigation ul li a{
    color: #888;
    font-weight: 600;
    padding-bottom: 4px;
    transition: all 0.5s ease-in-out;
}
.navigation ul li a:hover{
    color: #fff;
    border-bottom: 1px solid #fff;
}
.navigation .check{
    color: #fff;
    border-bottom: 1px solid #fff;
}

/*Main*/

main section{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 5rem 10rem;
}
.main-text img{
 
    width: 20%; /* Defina a largura desejada para a imagem, por exemplo, 50% */
    height: auto; /* A altura será ajustada automaticamente proporcionalmente à largura */

}
.main-text h3{
    font-size: 3.5rem;
    margin-bottom: 2rem;
    color: white;
}

.main-text {
    
    color: white;
}

.main-text p{
    margin-bottom: 1.5rem;
}
.main-text h6{
    color: #999;
    font-size: 1rem;
    margin-bottom: 2rem;
}
.main-text .btn{
    padding: 10px 25px;
    background: #0071e3;
    border-radius: 20px;
    color: #fff;
    font-size: 1.5rem;
    transition: all 0.5s;
}
.main-text .btn:hover{
    opacity: .85;
}
.main-text .text h5{
    font-size: 1rem;
    color: #444;
    margin-top: 2rem;
    margin-bottom: 2rem;
}
.main-text .content {
    display: flex;
    align-items: center;
    gap: 10px;
}
.main-text .content span{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 1px 1px #888;
    transition: all 0.5s;
}
.main-text .content span:hover{
    opacity: .80;
}

.main-img img{
    width: 80%;
    height:70%;
    margin-left: auto; /* Alinha a imagem à direita */
   
}


</style>

<body>

<!-- Imagem e texto -->
    <nav class="navbar navbar-light bg-light">
        
            <a class="navbar-brand" href="#">
            <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img class="d-inline-block" align="top" alt="" src="">
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
                </div>

            </div>
        </div>
    </div>
      <!-- Boatao da navbar -->

     <!-- Design pagina inicial -->

    <main>
        <section>
            <div class="main-text">
                <img src="img/logoPaginaInicial.png" alt="">
                <h3>Seu sitema <br>
                    Para Organizar  <br>
                    Compromissos Online <br>
                </h3>
                <a href="formulario.php" class="btn">Agende Seu ompromisso</a>
               
            </div>
            <div class="main-img">
                <img src="img/imgPaginaInicial.png" alt="Imagem do iPhone" id="phone">
            </div>
        </section>
    </main>

</html>
</body>
</html>