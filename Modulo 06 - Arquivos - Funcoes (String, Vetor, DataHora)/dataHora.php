<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

      // $date = date('d/m/Y');

      echo '<pre>';
        //Para passar o timeZone $dt = new DateTime(null, new DateTimeZone('America/Fortaleza'));
        $dt = new DateTime();
        echo "Hoje: " . $dt->format('d/m/Y') . "<br />";
        echo "Mais 4 meses: " . $dt->modify('+2 months')->format('d/m/Y') . "<br />";

        //Pegar a data atual e acrescentar 5 meses
        $data = new DateTime('+5 months');
        echo "Daqui a 5 meses será: " . $data->format('d/m/Y') . "<br />";

        //Mostrar a diferença entre duas datas $diff -> retorna um objeto

        $diff = $data->diff($dt);
        print_r($diff);

        //Exibindo especificamente um informaçao - usar atributos do objeto
        echo "<br /> Diferença em meses: " . $diff->m; //Exibe a diferença em meses
        echo "<br /> Diferença em dias: " . $diff->days; //Exibe a diferença em meses


      echo '</pre>';

    ?>
  </body>

</html>
