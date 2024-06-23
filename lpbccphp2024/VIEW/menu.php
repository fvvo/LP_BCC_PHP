<?php
  session_start(); 
   if (!isset($_SESSION['login']))
       Header("Location: ../index.php");   
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




    <title>Menu</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper blue darken-3">
            <a href="#" class="brand-logo right">
                <img src="../VIEW/images/bernardo1.jpeg" alt=""
                width="130" height="65"> Usuario:  <?php echo $_SESSION['login']; ?>
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/lpbccphp2024/view/livro/lstLivro.php">Livros</a></li>
                <li><a href="/lpbccphp2024/view/autor/lstAutor.php">Autores</a></li>
                <li><a href="/lpbccphp2024/view/cliente/lstCliente.php">Clientes</a></li>
                <li><a href="/lpbccphp2024/view/logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="/view/js/materialize.js"></script>
    <script src="/view/js/init.js"></script>

 
</body>

</html>