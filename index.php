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
					<div>
						<div style="background-image: url(./imagens/home/destaque1.png)" class="background-img">
						</div>
						<h4>3 vantagens do perfil de alumínio para vidro.</h4>
						<p>Longa durabilidade: Um dos principais benefícios é a longa durabilidade do alumínio. Variedade de opções: É possível personalizar detalhes no acabamento. Valoriza o imóvel: Por ser um produto de alta qualidade, longa durabilidade e baixo custo de manutenção.</p>
					</div>

					<div>
						<div style="background-image: url(./imagens/home/destaque2.png)" class="background-img">
						</div>
						<h4>Como escolher corretamente seu perfil de alumínio?</h4>
						<p>A escolha de um fornecedor de qualidade é fundamental. Focar somente no preço não é a melhor decisão para o seu projeto. Pesquise bem e prefira distribuidores que utilizem matéria-prima e ligas de boa performance, aliando o melhor custo benefício ao perfil de alumínio que você necessita.</p>
					</div>

					<div>
						<div style="background-image: url(./imagens/home/destaque3.png)" class="background-img">
						</div>
						<h4>A importância de conferir as medidas.</h4>
						<p>Nunca é demais conferir as medidas e cores do seu perfil de alumínio para que esteja como projetado. Cada milímetro no comprimento ou na largura do perfil para porta de vidro &#40;por exemplo&#41; faz toda a diferença. Verifique também a espessura mais adequada da peça em função do uso que pretende dar a ela e do peso do vidro.</p>
					</div>

					<div>
						<div style="background-image: url(./imagens/home/destaque4.png)" class="background-img">
						</div>
						<h4>As cores escolhidas harmonizam com o ambiente?</h4>
						<p>A escolha nas cores dos perfis de alumínio, devem harmonizar com o ambiente. Ao optar pelas cores dos perfis, os tons não podem destoar dos móveis ou paredes do ambiente da sua casa, a fim de não comprometer a beleza do projeto. Na dúvida fique com as cores neutras que encaixam em quase todos os ambientes.</p>
					</div>
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
					<p>Na Inova Alumínio, você encontra as melhores soluções de perfis de alumínio do mercado, visando o compromisso de oferecer produtos com matéria prima de procedência, garantindo o mais alto padrão de qualidade, eficiência &#91;...&#93;</p>
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