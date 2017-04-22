<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/b18fdd47e1.js"></script>

    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="css/laramusic-painel.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/favicon-laramusic.png">

    <title>Painel LaraMusic</title>
</head>
<body>
    <div class="menu">
        <ul class="menu col-md-12">

            <li class="col-md-2 text-center">
                <a href="home">
                    <img src="img/laramusic-branca.png" alt="LaraMusic" class="logo">
                </a>
            </li>

            <li class="col-md-2 text-center">
                <a href="relatorios">
                    <img src="img/estilos-laramusic.png" alt="Estilos" class="img-menu">
                    <h1>Estilos</h1>
                </a>
            </li>

            <li class="col-md-2 text-center">
                <a href="relatorios">
                    <img src="img/albuns-laramusic.png" alt="Albuns" class="img-menu">
                    <h1>Albuns</h1>
                </a>
            </li>

            <li class="col-md-2 text-center">
                <a href="relatorios">
                    <img src="img/music-laramusic.png" alt="Musicas" class="img-menu">
                    <h1>Músicas</h1>
                </a>
            </li>

            <li class="col-md-2 text-center">
                <a href="relatorios">
                    <img src="img/perfil-laramusic.png" alt="Perfil" class="img-menu">
                    <h1>Perfil</h1>
                </a>
            </li>

            <li class="col-md-2 text-center">
                <a href="relatorios">
                    <img src="img/sair-laramusic.png" alt="Sair" class="img-menu">
                    <h1>Sair</h1>
                </a>
            </li>
        </ul>
    </div> <!-- End Menu -->

    <div class="clear"></div>

    <div class="actions">
        <div class="container">
            <a href="forms" class="add">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </a>

            <form action="" class="form form-inline form-search">
                <input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
                <input type="submit" name="pesquisar" value="Encontrar" class="btn btn-danger">
            </form>
        </div>
    </div> <!-- End Actions -->

    <div class="clear"></div>

    <!-- Conteúdo Dinâmico -->
    <?php
        if(isset($_GET['prm'])){
            if(file_exists("pags/{$_GET['prm']}.php"))
                include_once "pags/{$_GET['prm']}.php";
            else
                include_once 'pags/404.php';
        }
        else{
            include_once 'pags/home.php';
        }
    ?>

    <div class="clear"></div>

    <footer class="footer actions">
        <div class="container text-center">
            <p class="footer">EspecializaTi - Todos os direitos reservados</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>