<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

      $pessoas = [
        'iCroft' => [ 'name' => "Lara Croft", 'job' => 'Developer'], //linha
        ['name' => "Lara", 'job' => 'Designer'],
      ];

      //
      // for($i = 0; $i < count($pessoas); $i++){
      //   print_r($pessoas[$i]);
      // }

      foreach ($pessoas as $value) {
        // code...
        echo print_r($value);
      }
      echo "<br/>";
      for($i = 0; $i <= 10; ++$i){
        echo $i . "<br/>";
      }
    ?>

    <h3>Tabuada com For</h3>

    <table border>

      <tr>
        <?php for($i = 1; $i <= 10; $i++) : ?> <!--abriu o for-->
          <td colspan="2">  <?= $i; ?>  </td>  <!-- colunas  -->
        <?php endfor; ?>                       <!--Fechou o for (usando php)-->
      </tr>

      <!--Criando uma tabuada -->

      <?php
        //No primeiro FOR é para criar as linhas
        for($i = 1; $i <= 10; $i++){
            echo "<tr>";
                for( $j = 1; $j <= 10; $j++ ) { //Cria 20 colunas para cada linha (duas a cada passada no for)
                  echo "<td width='35px'>" . $j . "*" . $i . " </td>
                        <td witdh='35px'>" . $j * $i . "</td>";
                }
            echo "</tr>";
        }

        $vetor_idades  = [  25, 		15, 	46, 	78,		];
		    $vetor_pessoas = [ "NÃ­cholas", "Pedro", "JoÃ£o", "Greg", ];

        $menor_ind = 0;
        for ($i=1; $i < count($vetor_idades); $i++) {
          if ($vetor_idades[$menor_ind] < $vetor_idades[$i]) {
            // code..
            $menor_ind = $i;
          }
        }

        echo $vetor_pessoas[$menor_ind] . " tem a maior idade " . $vetor_idades[$menor_ind];

    ?>



    </table>
  </body>

</html>
