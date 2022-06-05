<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>contate-nos</title>
</head>
<body>
    <div id="header">
        <?php include("partials/header.php");?>
    </div>
    <div class="container-avaliacao">
        <main>
            <h2>Contate-nos</h2>
            <form>
                <fieldset>
                    <label for="nome">Nome:</label>
                    <input type="text"><br>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                    <label for="caixa-de-texto">Digite sua mensagem</label><br>
                    <textarea name="mensagem" id="caixa-de-texto" cols="30" rows="10"></textarea><br>
                    <button type="submit">Enviar</button>
                </fieldset>
                <fieldset>
                    
                </fieldset>
            </form>
        </main>
    </div>
    <div id="rodape">
        <?php include("partials/footer.php");?>
    </div>
</body>
</html>