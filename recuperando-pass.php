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

    <title>Recuperar Senha - LaraMusic</title>
</head>
<body>
<div class="login">
    <div class="login-header">
        <img src="img/laramusic-branca.png" alt="LaraMusic" class="logo-login">
    </div>

    <form action="painel.php" method="post" class="form login">
        <div class="form-group">
            <input type="text" name="email" placeholder="Informe o seu e-mail" class="form-control">
        </div>

        <div class="form-group">
            <input type="password" name="password" placeholder="Informe a sua senha" class="form-control">
        </div>

        <div class="form-group">
            <input type="password" name="password" placeholder="Informe a sua senha" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" name="enviar" value="Recuperar" class="btn btn-login">
        </div>

        <div class="form-group text-right">
            <a href="index.php" class="recuperar">
                Entrar
            </a>
        </div>

    </form>
</div>
</body>
</html>