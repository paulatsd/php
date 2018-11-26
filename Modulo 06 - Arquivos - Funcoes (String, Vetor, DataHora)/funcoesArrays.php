<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

      echo '<pre>';

        $array = array(0 => 100, "color" => "red");
        print_r(array_keys($array)); //Lista as keys


        $a = array(1,2,3,4,5);        //Fn anonima
        $b = array_map(function($a) { return $a*$a*$a; }, $a); //Aplica uma função a cada elemento do array passado

        print_r($b);

        $array1 = array("a" => "green", "red", "blue", "red");
        $array2 = array("b" => "green", "yellow", "red");

        $result = array_diff($array2,$array1); //Mostra a diferença dos arrays - a dif do primeiro par para  o segundo
        print_r($result);


        $fruits = array("img12.png", "img10.png", "img2.png", "img1.png");

        /* Vetores de ordenação
        * sort - ordena apenas os elementos, não os índices
        * asort - ordena elementos e indices
        * rsort - ordenação reversa (sem indice)
        * arsort - ordenação reversa (com indice)
        * ksort - ordena o arry pela chave (key)
        */

        natsort($fruits); // se aplica mais a strings - por ordem natural
        foreach ($fruits as $key => $val) {
            echo "fruits[" . $key . "] = " . $val . "\n";
        }

      echo '</pre>';

      $array = array('nome' => 'Nícholas', 'profissao' => 'programador');
      extract($array); //extrae as chaves, cria variáveis e atribue o valor a ela
      echo $nome ." é um " . $profissao;

    ?>
  </body>

</html>
