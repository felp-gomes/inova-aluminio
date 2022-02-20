<?php
//Referências da Página
$titulo = "Inova Alumínio";
$description = "Inova Alumínio";

//Configurações HEAD
$css = array("base", "inicial", "rwd", "animate");    // CSS
$js = array("jquery", "scripts-base", "wow.min");

include_once('view/base/head.php'); // Estrutura Head

?>
</head>
<body>

    <!-- INCLUSÃO DO CABEÇALHO -->
    <?php include('view/topo.php'); ?>


    <!-- #################################### CONTAINER SEPARATOR #################################### -->

    <!-- [BEGIN] MAIN CONTENT -->
    <main>
		<section class="container section-main">
			<div class="content">
				<div class="flex introducao">
					<img src="./imagens/home/img_boneco.png" alt="Imagem de um boneco" title="Imagem de um boneco">
					<div class="text">
						<p>
							Somos especialista na distribuição em Perfis de Alumínio
						</p>
						<p>
							Temos uma variedade de produtos para sua empresa, com excelente qualidade e acabamento diferenciado. Somos especialista na distribuição em Perfis de Alumínio.
						</p>

						<button>
							<a href="" class="flex">
								<img src="./imagens/home/icon_wpp.png" alt="Ícone do Whatsapp" title="Ícone do Whatsapp">
								<p class="home-contact">Fale conosco</p>
							</a>
						</button>
					</div>
				</div>
			</div>
		</section>

		<section class="container section-diferenciais">
			<div class="content">
				<header>
					<h2>Nossos Diferenciais</h2>
					<p>
						Nosso material possui uma película protetora evitando arranhões, garantindo melhor qualidade na instalação.
					</p>
				</header>

				<div class="flex">
					<div class="section-card">
						<img src="./imagens/home/icon_pronta-entrega.png" 
						alt="Ícone de um caminhão"
						title="Ícone de um caminhão">
						<h3>
							Pronta Entrega
						</h3>
					</div>

					<div class="section-card">
						<img src="./imagens/home/icon_qualidade.png" 
						alt="Ícone de uma medalha"
						title="Ícone de uma medalha">
						<h3>
							Qualidade
						</h3>
					</div>

					<div class="section-card">
						<img src="./imagens/home/icon_diversidade-produtos.png" 
						alt="Ícone de uma peça de quebra cabeça"
						title="Ícone de uma peça de quebra cabeça">
						<h3>
							Diversidade de Produtos
						</h3>
					</div>

					<div class="section-card">
						<img src="./imagens/home/icon_preco-justo.png" 
						alt="Ícone de dinheiro"
						title="Ícone de dinheiro">
						<h3>
							Preço Justo
						</h3>
					</div>
				</div>
			</div>
		</section>

		<section class="container section-destaques">
			<div class="content">
				<header>
					<h2>Destaques</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</header>
			
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
				<button class="button-more">
					<a href="">Ver todos</a>
				</button>
			</div>
		</section>

		<section class="container section-produtos">
			<div class="content flex">
				<img src="./imagens/home/img_produto.jpg" alt="" title="">
				<header>
					<h2>Produtos</h2>
					<p>Na Inova Alumínio, você encontra as melhores soluções de perfis de alumínio do mercado, visando o compromisso de oferecer produtos com matéria prima de procedência, garantindo o mais alto padrão de qualidade, eficiência [...]</p>
					<button class="button-more">
						<a href="">Ver mais</a>
					</button>
				</header>
			</div>
		</section>

		<section class="container section-catalogo">
			<div class="content">
				<div class="block-catalogo flex">
					<header>
						<h2>Catálogo de Perfis<br> de Alumínio</h2>
						<p>Na Inova Alumínio, você encontra as melhores soluções de perfis de alumínio do mercadEleve a qualidade dos seus projetos com nossos perfis.</p>
						<button class="button-catalogo">
							<a class="flex" href="" download="Nome do arquivo e extensão">
								<img src="./imagens/home/icon_download.png" alt="Ícone de download" title="Ícone de download">
								<p>Baixar Catálogo</p>
							</a>
						</button>
					</header>
					<img src="./imagens/home/img_youtube.png" alt="Imagem do Youtube" title="Imagem do Youtube">
				</div>
				<div class="block-catalogo-insta">
					<div class="flex">
						<img src="./imagens/home/icon_insta-social.png" alt="Logo do Instagram" title="Logo do Instagram">
						<p>
							@inovaaluminiooficial
						</p>
					</div>
					<a href="">
						<img src="./imagens/home/img_insta.png" alt="Imagem do catálogo" title="Imagem dos catálogos">
					</a>
				</div>
			</div>
		</section>

    </main>
    <!-- [END] MAIN CONTENT -->

    <!-- #################################### CONTAINER SEPARATOR #################################### -->

    <!-- INCLUSÃO DO RODAPÉ -->
    <?php include('view/rodape.php'); ?>

</body>
</html>