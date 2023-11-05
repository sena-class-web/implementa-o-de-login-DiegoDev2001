<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head> 
<body>


    <form action="auth.php" method="post">
        <label for="usuario">Usuário:</label>       
        <input type="text" name="usuario" placeholder="Digite o usuario"><br>
        <label for="senha">Senha:<label>
        <input type="password" name="senha" placeholder="Digite a senha"><br>
        <input type="submit" value="Acessar">

        

    </form>

    <div class="error-box">
        <?php

            if(isset($_GET['erro_pass'])) {
                echo'<p class="error-item">Usuario ou senha incorretos ou não digitado!</p>';
            }
            elseif ( isset($_GET['erro_login'])){
                echo '<p class="error-item"> É necessário estar logado para acessar a página! </p>';

            }
            else {

                echo '';

            }

        ?>
    
    </div>

</body>

</html>
