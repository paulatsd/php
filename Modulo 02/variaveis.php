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

        /*$a++ - primeiro usa a variável e depois incrementa
        * ++$a - incrementa e depois usa a variável
        * $a vale 12 e $b vale 25*/
    		$c = $a++ + 12 + --$b; //12 + 12 + 24 = 48
    		echo "\$c vale: " . $c . "<br />";
    		echo "\$a vale: " . $a . "<br />";
    		echo "\$b vale: " . $b . "<br />";

        $d = 1;
        echo "Somando \$d com 3 : " . $d+=3;

        $v1 = 3;
        $v2 = '3';

        echo "<br/>";
        var_dump($v1 == $v2); //true - faz caching e compara int com int
        var_dump($v1 === $v2); //false - as tres igualdades compara o valor e o tipo


    ?>

    <h1>
      <?= $title;  //exibir conteudo php dentro de tag html ?>
    </h1>
  </body>

</html>
