<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include_once('view/base/metatag.php'); ?>

        <title><?php print $titulo; ?></title>

        <link rel="icon" type="image/ico" href="favicon.png" />

        <?php
//CSS
        if (isset($css)) {
            foreach ($css as $v) {
                print ('<link href="css/' . $v . '.css?' . filemtime('css/' . $v . '.css') . '" rel="stylesheet" type="text/css" />');
            }
        }


//Javascript
        if (isset($js)) {
            foreach ($js as $v) {
                print ('<script src="js/' . $v . '.js?' . ('js/' . $v . '.js') . '" type="text/javascript"></script>');
            }
        }
        ?>
        <script src="js/analise.js?<?php filemtime('js/analise.js'); ?>" type="text/javascript"></script>

        <script>
            new WOW().init();
        </script>

<?php
###### INCLUE CLASSES ######
include("app/fontes.class.php");


######LÊ ARQUIVOS CSS######
$fontes = new fontes();
$fontes->inserirFontes("fontes");
