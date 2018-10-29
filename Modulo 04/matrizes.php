<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

      $matriz = [ [1,2,3,4,5], [6,7,8,9,10]];
      echo $matriz[0][0];

      echo "<pre>";
      print_r($matriz[0]);
      print_r($matriz[1]);
      print_r($matriz);
      echo "</pre>";


      $pessoas = [
        'iCroft' => [ 'name' => "Lara Croft", 'job' => 'Developer'], //linha
        ['name' => "Lara", 'job' => 'Designer'],
      ];

      echo "<pre>";
        print_r($pessoas);
      echo "</pre>";

      echo "<pre>";
        print_r($pessoas['iCroft']);
      echo "</pre>";

      //                        coluna             coluna
      $pessoas['paula'] = ['name' => 'Paula', 'job' => 'servidora pública' ]; //Linha da matriz

      echo "<pre>";
        print_r($pessoas);
      echo "</pre>";

    ?>
  </body>

</html>
