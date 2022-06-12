<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../partials/head.php" ?>
    <title>Avaliação</title>
</head>

<body>
    <?php include "../partials/navbar.php" ?>
    <div class="container">
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <form class="col s12">
                    <h5>Contate-nos</h5>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="nome" type="text" class="validate">
                            <label for="nome">Nome</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="mensagem" class="materialize-textarea"></textarea>
                            <label for="Mensagem">Sua mensagem</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light grey">
                        <a href="/Agenda-ONU/index.php" class="white-text">Cancelar</a>
                    </button>
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
        <div class="divider"></div>
        <div class="section">
            <div class="row">
                <form class="col s12">
                    <div>
                        <h6>Que nota você dá para a interface do site?</h6>
                        <label><input name="nota-interface" type="radio" checked /><span>1</span></label>
                        <label><input name="nota-interface" type="radio" checked /><span>2</span></label>
                        <label><input name="nota-interface" type="radio" checked /><span>3</span></label>
                        <label><input name="nota-interface" type="radio" checked /><span>4</span></label>
                        <label><input name="nota-interface" type="radio" checked /><span>5</span></label>
                        <label><input name="nota-interface" type="radio" checked /><span>6</span></label>
                        <label><input name="nota-interface" type="radio" checked /><span>7</span></label>
                        <label><input name="nota-interface" type="radio" checked /><span>8</span></label>
                        <label><input name="nota-interface" type="radio" checked /><span>9</span></label>
                        <label><input name="nota-interface" type="radio" checked /><span>10</span></label>
                    </div>
                    <div>
                        <h6>Que nota você dá para o design do site?</h6>
                        <label><input name="nota-design" type="radio" checked /><span>1</span></label>
                        <label><input name="nota-design" type="radio" checked /><span>2</span></label>
                        <label><input name="nota-design" type="radio" checked /><span>3</span></label>
                        <label><input name="nota-design" type="radio" checked /><span>4</span></label>
                        <label><input name="nota-design" type="radio" checked /><span>5</span></label>
                        <label><input name="nota-design" type="radio" checked /><span>6</span></label>
                        <label><input name="nota-design" type="radio" checked /><span>7</span></label>
                        <label><input name="nota-design" type="radio" checked /><span>8</span></label>
                        <label><input name="nota-design" type="radio" checked /><span>9</span></label>
                        <label><input name="nota-design" type="radio" checked /><span>10</span></label>
                    </div>
                    <div>
                        <h6>Que nota você dá para o site em geral?</h6>
                        <label><input name="nota-geral" type="radio" checked /><span>1</span></label>
                        <label><input name="nota-geral" type="radio" checked /><span>2</span></label>
                        <label><input name="nota-geral" type="radio" checked /><span>3</span></label>
                        <label><input name="nota-geral" type="radio" checked /><span>4</span></label>
                        <label><input name="nota-geral" type="radio" checked /><span>5</span></label>
                        <label><input name="nota-geral" type="radio" checked /><span>6</span></label>
                        <label><input name="nota-geral" type="radio" checked /><span>7</span></label>
                        <label><input name="nota-geral" type="radio" checked /><span>8</span></label>
                        <label><input name="nota-geral" type="radio" checked /><span>9</span></label>
                        <label><input name="nota-geral" type="radio" checked /><span>10</span></label>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <textarea id="mensagem" class="materialize-textarea"></textarea>
                            <label for="Mensagem">Tem alguma sugestão ou crítica? Deixe a sua mensagem!</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light grey">
                        <a href="/Agenda-ONU/index.php" class="white-text">Cancelar</a>
                    </button>
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
        
    </div>
    </div>
    <?php include "../partials/footer.php" ?>
</body>

</html>