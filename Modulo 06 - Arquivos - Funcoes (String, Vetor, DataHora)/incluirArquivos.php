<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

      /*
      Funções utilizadas para incluir outros arquivos no meu arquivo de trabalho atual.
      Com isto, posso usar funções dos arquivos incluídos.
        - include
        - include_once - inclui apenas uma vez e não exibe erro
        - require
        - require_once - inclui apenas uma vez e não exibe erro
      */

      include('utils.php'); //Include em arquivo que não existe -> Alerta: e não para a execução do arquivo
      require("uti.php");   //se o arquivo não existe -> Fatal Error: para a execução do arquivo

      echo soma(3,4);


    ?>
  </body>

</html>
