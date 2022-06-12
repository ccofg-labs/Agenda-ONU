<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../partials/head.php" ?>
    <title>Calculadora</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#btn-calcular").click(()=> {
                $('#valor-por-hora').val();
                $('#total').val();
            });
        });
    </script>
</head>

<body>
    <?php include "../partials/navbar.php" ?>
    <div class="container">
        <h2>Calculadora de Consumo de Energia Elétrica</h2>
        <p>Calcule a energia gasta com os equipamentos da sua empresa ou residência. Digite a quantidade de Watts do seu aparelho e selecione a quantidade de horas e dias de consumo em um mês</p>
        <p>Esta calculadora de consumo de energia funciona de forma automática: através dela você poderá calcular consumo de energia online, calcular kwh/mes e também aprenderá a calcular o preço do preço kwh de modo fácil e rápido. A calculo de consumo de energia eletrica foi desenvolvida para permitir que facilmente sejam encontrados os valores de kWh gastos por mês em residências com base na potência dos equipamentos, horas de uso por dia e dias de uso por mês.</p>
        <div class="section amber lighten-5">
            <div class="row">
                <div class="col s12 m6">
                    <span>POTÊNCIA APARELHO W</span>
                    <input type="number" step=".1" min="0" name="valor-watts" id="valor-watts" placeholder="Digite o Valor em Watts">
                    <span>Digite a potência/consumo em Watts do aparelho</span>
                </div>
                <div class="col s12 m6 center-align">
                    <span class="">TEMPO DE USO POR DIA</span>
                    <div class="row">
                        <div class="col s6">
                            <input type="number" step="1" min="0" max="24" name="valor-horas" id="valor-horas" placeholder="Digite as horas">
                        </div>
                        <div class="col s6">
                            <input type="number" step="1" min="0" max="59" name="valor-minutos" id="valor-minutos" placeholder="Digite os minutos">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m6">
                    <div class="row">
                        <div class="col s6">
                            <span>DIAS USO</span>
                            <input type="number" step="1" min="0" name="diasuso" id="diasuso" placeholder="Digite os dias de uso">
                            <span>Quantidade de dias de uso</span>
                        </div>
                        <div class="col s6">
                            <span>PREÇO KWH (R$)</span>
                            <input type="number" step=".01" min="0" name="preco-kwh" id="preco-kwh" placeholder="Digite os dias de uso">
                            <span>Aprenda a encontrar o valor na imagem abaixo!</span>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 cyan lighten-3">
                    <table>
                        <thead>
                            <tr>
                                <th>VALOR P/HORA</th>
                                <th>VALOR TOTAL</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>R$<span id="valor-por-hora">0.00</span></td>
                                <td>R$<span id="total">0.00</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <a class="waves-effect waves-light btn" id="btn-calcular">Calcular</a>
    </div>
    <br>
    <?php include "../partials/footer.php" ?>
</body>

</html>