<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php
        $title = "Título";

        $a = 12;
		    $b = 25;

        //$a vale 12 e $b vale 25
    		$c = $a++ + 12 + --$b; //12 + 12 + 24 = 48
    		echo "\$c vale: " . $c . "<br />";
    		echo "\$a vale: " . $a . "<br />";
    		echo "\$b vale: " . $b . "<br />";

        $d = 1;
        echo "Somando \$d com 3 : " . $d+=3;

        //$a++ - primeiro usa a variável e depois incrementa
        //++$a - incrementa e depois usa a variável


    ?>

    <h1>
      <?= $title;  //exibir conteudo php dentro de tag html ?>
    </h1>
  </body>

</html>
