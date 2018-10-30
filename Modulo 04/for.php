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

      for($i = 0; $i < count($pessoas); $i++){
        echo $pessoas[$i];
      }

      for($i = 0; $i <= 10; ++$i){
        echo $i . "<br/>";
      }
    ?>
  </body>

</html>
