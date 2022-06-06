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
    <title>Energias nosivas</title>
</head>
<body>
    <div id="header">
        <?php include("partials/header.php");?>
    </div>
    <div class="container">
        <div class="container__principal">
            <main>
                <article>
                    <header>
                        <h1>Quais métodos de energia são nocivos ao meio ambiente?</h1>
                    </header>
                    <section>
                    <p>
                        Nesta página você pode encontrar uma lista de métodos de energia nocivos ao meio ambiente!
                        Leia para conhecer um pouco sobre cada uma delas!
                    </p>
                    </section>
                </article>
                <article>
                    <header id="nuclear">
                        <h2>Energia Nuclear</h2>
                    </header>
                    <section>
                    <figure>
                        <img src="assets/img/metodos-nosivos/energia-nuclear.png" alt="Energia Nuclear">
                    </figure>
                    <p>
                        Energia nuclear ou energia atômica é a energia liberada em uma reação nuclear,
                        ou seja, em processos de transformação de núcleos atômicos. Alguns isótopos de certos
                        elementos apresentam a capacidade de se transformar em outros isótopos ou elementos
                        por meio de reações nucleares, emitindo energia durante esse processo. Baseia-se no
                        princípio da equivalência massa-energia, proposto por Albert Einstein, segundo a qual
                        durante reações nucleares ocorre transformação de massa em energia.
                        Foi descoberta por Otto Hahn e Lise Meitner com a observação de uma fissão nuclear
                        depois da irradiação de urânio com nêutrons.A tecnologia nuclear tem como uma das
                        principais finalidades gerar energia elétrica. Aproveitando-se do calor emitido na
                        reação, para aquecer a água até se tornar vapor, assim movimentando uma turbina a
                        vapor acoplada a um gerador. A reação nuclear pode acontecer controladamente em um
                        reator de usina nuclear ou descontroladamente em uma bomba atômica
                        (causando uma reação chamada reação em cadeia). A toxicidade baseia-se na radiação
                        emitida pelas substâncias envolvidas na reação nuclear. Assim, tanto o material
                        utilizado, quanto todo entorno serão fonte de radioatividade e, portanto, tóxicos.
                    </p>
                    </section>
                </article>
                <article id="fossil">
                    <header>
                        <h2>Energia fóssil</h2>
                    </header>
                    <section>
                        <figure class="container__img">
                            <img src="assets/img/metodos-nosivos/energia-fossil.png" alt="Energia Nuclear">
                        </figure>
                        <p>
                            Combustíveis fósseis são combustíveis formados por meio de processos naturais,
                            como a decomposição de organismos mortos soterrados . Os combustíveis fósseis contêm
                            alta quantidade de carbono, usados para alimentar a combustão. São usados como
                            combustíveis, o carvão mineral, gás natural e o petróleo. Os combustíveis fósseis
                            são recursos não-renováveis, pois levam milhões de anos para se formarem, e as
                            reservas desses combustíveis estão a esgotar-se, já que o consumo é maior que a
                            produção. A queima de combustíveis fósseis produz cerca de 21,3 bilhões de toneladas
                            de dióxido de carbono anualmente, e metade dessa produção atinge a atmosfera, já que
                            os processos naturais só conseguem absorver metade dessa quantidade. A produção e uso
                            dos combustíveis fósseis é a principal causa do aquecimento global e gera
                            significativa poluição de vários tipos, com amplas repercussões negativas sobre o
                            ambiente, a sociedade, a economia e a saúde humana.
                        </p>
                    </section>
                </article>
                <article id="gasnatural">
                    <header>
                    <h2>Energia à gás natural</h2>
                    </header>
                    <section>
                        <figure>
                            <img src="assets/img/metodos-nosivos/energia-gas.png" alt="Energia gás natural">
                        </figure>
                        <p>
                            O gás natural é uma mistura de derivados de combustíveis fósseis, formado quando
                            camadas de animais soterrados ficam submetidos a intenso calor e pressão ao longo
                            de milhares de anos, ou da biomassa quando está em decomposição. A energia que as
                            plantas naturalmente absorvem da luz do Sol é armazenado em forma de carbono, em
                            gás natural. É uma mistura de hidrocarbonetos leves encontrada no subsolo, na qual
                            o metano tem uma participação superior a 70% em volume. A composição do gás natural
                            pode variar bastante dependendo de fatores relativos ao campo em que o gás é
                            produzido, processo de produção, condicionamento, processamento e transporte.
                            O gás natural é um combustível fóssil e uma fonte de energia não renovável com uma
                            alta emissão de gases de efeito estufa.
                        </p>
                    </section>
                </article>
            </main>
        </div>
        <div class="container__lateral">
            <aside>
                <header>
                    <h4>Conteúdo da Página</h4>
                </header>
                <section>
                <ul>
                    <li><a href="#fossil">Energia Fossil</a></li>
                    <li><a href="#nuclear">Energia Nuclear</a></li>
                    <li><a href="#gasnatural">Energia Gás Natural</a></li>
                </ul>
                </section>
            </aside>
        </div>
    </div>
    <div id="rodape">
        <?php include("partials/footer.php"); ?>
    </div>
</body>
</html>