<!DOCTYPE>

<!-- Arrays em php nem sempre tem índices sequenciasi -->

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

      $vetor_idades  = [  25, 		15, 	46, 	78,		];
      $vetor_pessoas = [ "NÃ­cholas", "Pedro", "JoÃ£o", "Greg", ];

      echo '<pre>';
      print_r($vetor_idades);
      echo "</pre>";

      //"Para cada" - Foreach - percorre o vetor elemento a elemento

      //Imprimindo o indice (chave) e o valor
      foreach ($vetor_idades as $indice => $valor) {
        // code...
        echo '$vetor_idades[' .$indice. '] = ' . $valor . "<br/> ";
      }

      echo "<br />";

      // imprimindo só os valores do vetor
      foreach ($vetor_pessoas as $value) {
        // code...
        echo $value . "<br/> ";
      }

      //Calculando a menor idade com foreach
      $menor_idade = 100000000000000000;
      foreach ($vetor_idades as $key => $value) {
        // code...
        if($value < $menor_idade)
          $menor_idade = $value;

      }

      echo "A menor idade eh: " . $menor_idade;

    ?>
  </body>

</html>
