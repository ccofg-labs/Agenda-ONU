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
    <title>Energia limpa - Home</title>
    <script>
        $(document).ready(function(){
            
        });
    </script>
</head>
<body>
    <div id="header">
        <?php include("partials/header.php");?>
    </div>
    <div class="container-home">
            <div class="container-home__principal">
               <main>
                    <article id="secao1">
                        <header>
                            <h1>Como as Nações Unidas apoiam os Objetivos de
                        Desenvolvimento Sustentável?</h1>
                        </header>
                        <section>
                            <figure>
                                <img src="assets/img/energia_limpa_index.gif" alt="energia limpa">
                            </figure>
                        </section>
                    </article>
                    <article id="secao2">
                        <header>
                            <h2>Objetivos da ONU</h2>
                        </header>
                        <section>
                            <figure>
                                <img src="assets/img/ods_onu.png" alt="ODS da ONU">
                            </figure>
                            <p>Os objetivos de Desenvolvimento Sustentável são um apelo global à ação para acabar com a pobreza e proteger o meio ambiente e o clima e garantir que as pessoas, em todos os lugares, possam desfrutar de paz e de prosperidade. Estes são os objetivos para os quais as Nações Unidas estão contribuindo a fim de que possamos atingir a Agenda de 2030 no Brasil.</p>
                        </section>
                    </article>
                    <article id="secao3">
                        <header>
                            <hgroup>
                                <h2>Quanto a Energia Sustentável?</h2>
                                <h3>Quando falamos de energia sustentável, os objetivos da ONU são os seguintes:</h3>
                            </hgroup>
                        </header>
                        <section>
                            <header>
                                <h4>Objetivo Principal:</h4>
                            </header>
                            <ol>
                            <li><i class="fa-solid fa-arrow-right-long"></i>Assegurar
                            o acesso confiável, sustentável,
                            moderno e a preço
                            acessível à energia para todas e todos;
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right-long"></i>Até
                            2030, assegurar o acesso universal,
                            confiável, moderno e a preços acessíveis
                            a serviços de energia;
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right-long"></i>Até
                            2030, aumentar substancialmente a
                            participação de energias renováveis na
                            matriz energética global;
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right-long"></i>Até
                            2030, reforçar a cooperação internacional
                            para facilitar o acesso a pesquisa e
                            tecnologias de energia limpa, incluindo energias
                            renováveis, eficiência energética e
                            tecnologias de combustíveis fósseis avançadas e
                            mais limpas, e promover o investimento
                            em infraestrutura de energia e em tecnologias de
                            energia limpa;
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right-long"></i>Até
                            2030, expandir a infraestrutura e modernizar
                            a tecnologia para o fornecimento
                            de serviços de energia modernos e sustentáveis
                            para todos nos países em
                            desenvolvimento, particularmente nos países
                            menos desenvolvidos, nos pequenos
                            Estados insulares em desenvolvimento e nos
                            países em desenvolvimento sem litoral,
                            de acordo com seus respectivos programas de
                            apoio.
                        </li>
                            </ol>
                        </section>
                    </article>
                    <article id="secao4">
                        <header>
                            <hgroup>
                                <h2>Veja todos os video sobre energia limpa</h2>
                            </hgroup>
                        </header>
                        <section>
                            <h3>Objetivos de Desenvolvimento Sustentável IBGE Explica:</h3>
                            <audio src="assets/audio/audio/ODS-7-Energias-renováveis-IBGE-Explica"></audio>
                            <h3>ODS 7 Energias renováveis IBGE Explica:</h3>
                        </section>
                    </article>
                    <article id="secao5">
                        <header>
                            <hgroup>
                                <h3>Mais informações:</h3>
                                <h4>Informe-se para poder ajudar na causa!</h4>
                            </hgroup>
                        </header>
                        <section>
                            <ol>
                                <li>
                                     <a href="metodosLimpo.html">
                                    Quais são os métodos de energia
                                    limpa e sustentável?
                                    </a>
                                </li>
                                <li>
                                    <a href="metodosNocivo.html">
                                    Quais são os métodos de energia
                                    nocivos ao meio ambiente?
                                    </a>
                                </li>
                                <li>
                                    <a href="paisesEL.html">
                                    Quais países usam energia
                                    sustentável e como isso os afeta?
                                    </a>
                                </li>
                                <li>
                                    <a href="calculadoraEnergia.html" target="_blank">
                                    As consequências que o uso de sua
                                    energia trazem.
                                    </a>
                                </li>
                            </ol>
                        </section>
                    </article>
               </main>
            </div>
            <div class="container-home__lateral">
                <aside>
                    <article>
                        <header>
                            <h4>Conteúdo da Página </h4>
                        </header>
                        <nav>
                        <ul>
                            <li><a href="#secao2">Objetivos da ONU</a></li>
                            <li><a href="#secao3">Quanto a Energia Sustentável?</a></li>
                            <li><a href="#secao4">Veja todos os video sobre energia limpa</a></li>
                            <li><a href="#secao5">Objetivos de Desenvolvimento Sustentável</a></li>
                            <li><a href="#secao6">Mais informações:</a></li>
                         </ul>
                        </nav>
                    </article>
                </aside>
            </div>
    </div>
    <footer>
        <div id="rodape">
            <?php include("partials/footer.php"); ?>
        </div>
    </footer>
    </body>
</html>