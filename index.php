<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <?php include "./partials/head.php" ?>
</head>

<body class="yellow accent-1">
    <div class="container white center-align">
        <h3>Login</h3>
        <form action="pages/home.php" method="post">
            <div class="row">
                <div class="input-field col s12 m6 offset-m3">
                    <input placeholder="Seu email" type="email" class="validate" name="login" required>
                </div>
                <div class="input-field col s12 m6 offset-m3">
                    <input type="password" class="validate" name="senha" placeholder="Sua senha" required>
                </div>
            </div>
            <button class="btn waves-effect waves-light yellow black-text" type="submit" name="action">Logar
            </button>
        </form>
        <br>
    </div>
</body>

</html>