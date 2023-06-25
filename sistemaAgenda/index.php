<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        
        <div class="left-login">

            <h1>Faça login <br> E organize seus compromissos</h1>
            <img src="agenda.svg" class ="left-login-image" alt="agenda">
        </div>
    
        <div class="right-login">
            <div class="card-login">
            
            <form action="testLogin.php" method="POST">
                <h1>LOGIN</h1>
                
                    <div class="textfield">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="email" placeholder="Email">
                    </div>

                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name= "senha" placeholder="Senha">
                    </div>

                  
                    
                        <input class="btn-login" type="submit" name="submit" value="Enviar">
                   
                </div>
            </form> 
    </div>
</body>
</html>