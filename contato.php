<?php
//Referências da Página
$titulo = "Contato | Inova Alumínio";
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

        <section class="container interna_contato">

            <aside class="content">
                <h2>Contato | Orçamento</h2>

                <div class="fl-left formulario">
                    <div class="alerta"></div>
                    <div class="contato_loadicon"></div>
                    <form class="form js_mail_submit" method="post" action="">
                        <input type="text" name="nome" alt="true" placeholder="Nome" required>
                        <input type="text" name="telefone" alt="true" placeholder="Telefone" required>
                        <input type="text" name="email" alt="true" placeholder="Email" required>
                        <input type="text" name="assunto" alt="true" placeholder="Assunto" required>
                        <textarea type="text" name="mensagem" alt="true" placeholder="Mensagem" required></textarea>
                        <input class="btn_enviar" type="submit" name="enviar" value="ENVIAR">
                    </form>
                </div>

                <div class="fl-right">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7961.983889081906!2d-38.5178680651123!3d-3.811819900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74f1b0125c447%3A0xe5907f685c7e380a!2sInova%20Alum%C3%ADnio!5e0!3m2!1spt-BR!2sbr!4v1643227147889!5m2!1spt-BR!2sbr" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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