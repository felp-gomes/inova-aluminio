<?php
//Referências da Página
$titulo = "Destaque | Inova Alumínio";
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

        <section class="container interna_informacao">

            <aside class="content">

                <h2>Perfil de Alumínio</h2>

                    <div class="img_info fl-left" style=" background-image: url(imagens/interna/info.jpg);"></div>

                    <p>A escolha de um fornecedor de qualidade é fundamental. Focar somente no preço não é a melhor decisão para o seu projeto. Pesquise bem e prefira distribuidores que utilizem matéria-prima e ligas de boa performance, aliando o melhor custo benefício ao perfil de alumínio que você necessita. <br><br>

    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                
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