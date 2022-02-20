<?php
//Referências da Página
$titulo = "Sobre | Inova Alumínio";
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

        <section class="container interna_sobre">

            <aside class="content">

                <div class="fl-left">
                <h2>Inova Alumínio</h2>

                <p>A Inova Alumínio é uma empresa Reconhecida e Inovadora, que preza pela qualidade dos seus produtos e pelo bom relacionamento com os seu clientes e colaboradores. Ela surgiu através da visão do nosso Diretor, que atua há mais de 15 anos no setor. Ele enxergou uma  oportunidade no mercado que suprisse a necessidade dos clientes por materiais de alto giro, que muitas vezes faltavam em seus estoques e demoravam a chegar.<br><br>
 
Com isso, a Inova Alumínio trouxe a solução ideal para nossos parceiros, sendo uma Distribuidora de Perfis em Alumínio e Acessórios para a Construção Civil, trazendo para o nosso público rapidez na reposição dos estoques, produtos de qualidade e pronta entrega.<br><br>

Atendemos a diversos setores, tais como: Revendas de Alumínio, Depósitos de Materiais para Construção, Madeireiras, Revendas de Vidros, Construtoras, Indústrias e todo segmento da Construção Civil.
</p>
                </div>

                <img class="img_sobre fl-right" src="imagens/interna/img_sobre.png">
                <div class="clear"></div>

                <div class="flex flex_sobre">
                    
                    <div class="block">
                        <h3>Nossa Missão</h3>
                        <p>Promover soluções rápidas e eficientes para os nossos clientes, fornecendo Produtos em Alumínio e Acessórios para a Construção Civil.</p>
                    </div>

                    <div class="block">
                        <h3>Nossa Visão</h3>
                        <p>Consolidar nossa empresa como a melhor Distribuidora de Alumínio e Acessórios do Nordeste. Respeitando a todos que contribuem neste setor, gerando resultados e crescimento, sempre atentos às mudanças e investindo em novas tecnologias .</p>
                    </div>

                    <div class="block">
                        <h3>Nossos Valores</h3>
                        <p>1. Foco no Cliente;<br>
                            2. Confiança;<br>
                            3. Comprometimento;<br>
                            4. Agilidade;<br>
                            5. Qualidade;<br>
                            6. Colaboração;<br>
                            7. Ética;<br>
                            8. Valorização de Pessoas e seu Crescimento;<br>
                            9. Comunicação Efetiva;<br>
                            10. Crescimento e Rentabilidade;<br>
                            11. Inovação e Desenvolvimento.
                        </p>
                    </div>

                </div>

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