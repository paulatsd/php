<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

      // Instânciando o objeto para manipular o arquivo passado como argumento
      $file = new SplFileObject("data.csv");

      // Enquanto eu não chegar no final do arquivo e conseguir ler uma linha
      while ( ! $file->eof() &&  ( $line = $file->fgets() ) ){
        //vai quebrar a linha no momento que encontrar o separador passado ( , )
        //O retorno da função é um array contendo os itens quebrados
        $data = explode(",", $line);
        echo "Nome: " . $data[0] . " Idade: " . $data[1] . " Profissão: " . $data[2] . "<br />";
      }

    ?>
  </body>

</html>
