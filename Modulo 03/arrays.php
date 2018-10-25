<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

      $vetor = array(1,2,3,4,5); //Criando
      $arr = [1,2,3,4,5]; //Criando de forma mais simples
      $vetor[5] = 25; //inserindo valor

      //removendo valor do array
      unset($vetor[5]); //unset() - deleta variáveis ou posições de um vetor

      echo "<pre>";
      print_r($vetor);
      echo "</pre>";

      //Arrys em PHP são heterogeneos
      $anotherVector = array();
      $anotherVector[] = "valor 1"; //Add elemento na última posião do vetor
      $anotherVector[] = 11111;

      echo "<pre>";
      var_dump($anotherVector);
      echo "</pre>";

      //É possível definir índices do vetor

      $pessoa = ['name' => "Lara Croft", 'job' => 'Developer'];
      echo $pessoa['name'] . "It's a " . $pessoa['job'] . "<br/>";

      var_dump($pessoa[0]); // Dá nulo, pois não existe nenhuma posição no vetor com índice 0





    ?>
  </body>

</html>
