<?php
//Referências da Página
$titulo = "Destaques | Inova Alumínio";
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

        <section class="container interna_destaques">

            <aside class="content">

                <h2>Destaques</h2>

                <div class="block-destaque flex">


                    <a href="">
                        <div style="background-image: url(./imagens/home/destaque1.png)" class="background-img">
                        </div>
                        <h4>Como escolher corretamente seu Perfil de Alumínio?</h4>
                        <p>A escolha de um fornecedor de qualidade é fundamental. Focar somente no preço não é a melhor decisão para o seu projeto. Pesquise bem e prefira distribuidores que utilizem matéria-prima e ligas de boa performance, aliando o melhor custo benefício ao perfil de alumínio que você necessita.</p>
                    </a>

                    <a href="">
                        <div style="background-image: url(./imagens/home/destaque2.png)" class="background-img">
                        </div>
                        <h4>Chapas e Bobinas de Alumínio</h4>
                        <p>Tanto a chapa como a bobina de alumínio são materiais com uma ampla aplicação. E a razão é simples: trata-se de uma matéria-prima com características ricas para os mais diversos setores.                                                                                                                      
A bobina de alumínio é muito requisitada para a fabricação de embalagens – como latas, por exemplo. A vantagem é que as bobinas conseguem ser incorporadas em equipamentos industriais que fazem a moldagem personalizada do material.
Já a chapa de alumínio é requisitada para construções mais pesadas. Na fabricação de produtos de transporte, aeroespacial e militar.
</p>
                    </a>

                    <a href="">
                        <div style="background-image: url(./imagens/home/destaque3.png)" class="background-img">
                        </div>
                        <h4>As cores do Alumínio Harmonizam Com o Ambiente?</h4>
                        <p>A escolha nas cores dos perfis de alumínio, devem harmonizar com o ambiente. Ao optar pelas cores dos perfis, os tons não podem destoar dos móveis ou paredes do ambiente da sua casa, a fim de não comprometer a beleza do projeto. Na dúvida fique com as cores neutras que encaixam em quase todos os ambientes.</p>
                    </a>

                    <a href="">
                        <div style="background-image: url(./imagens/home/destaque4.png)" class="background-img">
                        </div>
                        <h4>As Dez Ferramentas Essenciais Para o Serralheiro (foto)</h4>
                        <p>1-	Serra Meia Esquadria;<br>
							2-	Jogo de Brocas de Vídea e Aço Rápido;<br>
							3-	Furadeira de Impacto;<br>
							4-	Jogo de Chaves de Fenda;<br>
							5-	Alicates : Universal, Pressão e Bico;<br>
							6-	Martelo de Ferro e de Borracha;<br>
							7-	Jogo de Chave Allen;<br>
							8-	Trena e Esquadro;<br>
							9-	Estilete;<br>
							10-	Calculadora.
						</p>
                    </a>

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