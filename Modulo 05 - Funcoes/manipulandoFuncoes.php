<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

        /*
          1 - Criar função
          2 - Variáveis estáticas
          3 - Função com argumentos variaveis
        */

        static $var; //Variavel estática

        // Criando função
        function soma($a, $b){
          return $a + $b;
        }

        $s = 'soma';
        echo $s(2,3);

        // Como pegar os argumentos de uma função passados dinamicamente
        function sum(){
          $args = func_get_args(); //pega os argumentos passados na função e gera um array
          return array_sum($args);
        }

        echo "<br />";
        echo sum(1,2,3,'10');
    ?>
  </body>

</html>
