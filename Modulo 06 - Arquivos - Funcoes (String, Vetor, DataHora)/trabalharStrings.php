<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

    // Consulta em Manual do PHP varias funcones para trabalhar com Strings
    $string = " Bom dia las chicas! ";
    echo trim($string) . "<br/>"; //remove espaço do início e fim da string
    echo str_replace("las chicas", "Girls", $string); //busca, substitui, contexto - Bom dia Girls!

    $dados = [];
    $dados['name'] = "Paula Tatyene";
    $dados['email'] = "tatyenedantas@gmail.com";

    echo "<br/>" . implode(', ', $dados); //Junta elementos de uma matriz em uma string

    echo "<pre>";
    print_r($dados);
    echo "</pre>";

    ?>
  </body>

</html>
