
//São arrays que contém informações que foram passadas via GET ou POST
//Ou um array contendo todas as variaveis globais



<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

        //$_SERVER - contém informações acerca do ambiente do servidor
        //$GLOBALS - reune todas as as variáveis globais da aplicação, inclusive get e post
        //$_GET - contém os métodos passados pela URL - muito utlizado para navegar em sistema
        //$_POST - Recebemos informações passadas através dos formulários de forma "escondida"
        echo '<pre>';
          var_dump($GLOBALS);
        echo '</pre>';


    ?>
  </body>

</html>
