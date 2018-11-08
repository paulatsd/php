<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

      /* Muito utilizada no javascript
      - São funções que não possuem nome
      - Consegue atribuir ela a uma variavel
      */

        //Criando função (sem nome) no momento da atrubuição à variável
        $soma = function($a,$b) {
          return $a + $b;
        };

        echo $soma(5,4); //chamando a função com o nome da variavel a qual foi atruída


        function saveDataOnFile( $fn = null ) {
          //......
          //......

          if ( ! is_null($fn) ) $fn();
        }

        echo '<br />';

        //Passando uma função anônima como parâmetro
        saveDataOnFile(
          function() {
            echo "Imprimindo de uma função Anônima";
          }
        );


    ?>
  </body>

</html>
