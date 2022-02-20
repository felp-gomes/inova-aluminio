<?php
//Referências da Página
$titulo = "Produtos | Inova Alumínio";
$description = "Inova Alumínio";

//Configurações HEAD
$css = array("base", "interna", "rwd", "animate");    // CSS
$js = array("jquery-3.3.1.min", "scripts-base", "wow.min");

include_once('view/base/head.php'); // Estrutura Head
?>

</head>
<body>
    <!-- INCLUSÃO DO CABEÇALHO -->
    <?php include('view/topo.php'); ?>

    <!-- #################################### CONTAINER SEPARATOR #################################### -->

    <!-- [BEGIN] MAIN CONTENT -->
    <main class="main_content">

        <!--[BEGIN] DOBRA BANNER-->

        <section class="container interna_produtos">

            <aside class="content">

                <h2>Produtos</h2>

                <h3>Perfis de Alumínio</h3>

                <p>Na Inova Alumínio você encontra as melhores soluções em perfis de alumínio e acessórios do mercado, visando o compromisso de oferecer produtos com matéria prima de procedência, garantindo o mais alto padrão de qualidade, variedade de produtos e cores, entrega eficiente e preço justo. Conte com a ajuda dos nossos representantes, oferecendo um atendimento personalizado de acordo com a necessidade da sua empresa.</p>
                
                <h3>Público Alvo</h3>

                <p>Todos nossos produtos atendem Revendas de Alumínio, Depósitos de Materiais para  Construção, Madeireiras, Revendas de Vidros, Construtoras, Indústrias e todo o segmento da Construção Civil.</p>

                <ul class="flex">
                    <li>Cantoneiras de Abas iguais</li>
                    <li>Cantoneiras de Abas desiguais</li>
                    <li>Perfis "U" de abas iguais</li>
                    <li>Perfis "U" de abas desiguais</li>
                    <li>Perfis T</li>
                    <li>Tubos Quadrados</li>
                    <li>Tubos Retangulares</li>
                    <li>Tubos Redondos</li>
                    <li>Tubos de Irrigação</li>
                    <li>Tubos Schedule</li>
                    <li>Vergalhões Redondos</li>
                    <li>Vergalhões Quadrados</li>
                    <li>Vergalhões Sextavados</li>
                    <li>Barra Chata (retangulares)</li>
                    <li>Contra Marcos - Arremates</li>
                    <li>Linha leve</li>

                    <li>Módulo Prático</li>
                    <li>Palhetas</li>
                    <li>Box Frisado</li>
                    <li>Box Liso</li>
                    <li>Box Temperado</li>
                    <li>Portões e Grades</li>
                    <li>Portões - Trilhos</li>
                    <li>Lambris</li>
                    <li>Guarda Copos - Balaustres</li>
                    <li>Corrimão</li>
                    <li>Brises</li>
                    <li>Pele de Vidro e Fachadas</li>
                    <li>Perfis para Stands</li>
                    <li>Luminosos</li>
                    <li>Trilhos para Cortinas</li>
                    <li>Arremates</li>

                    <li>Persianas</li>
                    <li>Perfis para Forros e Diversos</li>
                    <li>Linha 16</li>
                    <li>Linha 23</li>
                    <li>Linha 25</li>
                    <li>Linha 28</li>
                    <li>Linha 30</li>
                    <li>Janelas e Portas de Correr</li>
                    <li>Porta de Giro</li>
                    <li>Acessórios</li>
                    <li>Maxim Ar</li>
                    <li>Linha 42</li>
                    <li>Linha 25 à 90°</li>
                    <li>Linha 30 a 90°</li>
                </ul>

                <div class="clear"></div>

            </aside>

            <button class="button-more">
                <a href="javascript:history.back();">Voltar</a>
            </button>
            <div class="clear"></div>

        </section>

        <!--[END] DOBRA BANNER-->

    </main>
    <!-- [END] MAIN CONTENT -->

    <!-- #################################### CONTAINER SEPARATOR #################################### -->

    <!-- INCLUSÃO DO RODAPÉ -->
    <?php include('view/rodape.php'); ?>
</body>
</html>