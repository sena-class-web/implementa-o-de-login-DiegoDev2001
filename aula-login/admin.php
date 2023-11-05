<?php
    include 'check_login.php';

    if($_SESSION['nivel'] == "A") {
        session_destroy();
        header ('location:index.php?erro_login=true');
        exit;
    }

?>

<DOCTYPE html>
<html lang = "pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">   
    <title> Admin </title>
</head>

<body class="bg-admin">
<h1> Pagina de administração </h1>
    <p>Usuario logado:
        <?php echo $usuario; ?>
    </p>

    <a href="logout.php">Sair</a>
    
</body>
</html>   