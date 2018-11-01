<!DOCTYPE html>
<html>
<head>
	<title>Módulo 5 - Funções</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php

  /*
    1. Aprender sobre escopo global e local de uma variavavel
    2. Passar função para um variavel, podendo chamá-la por outro nome.
    3. Passar funcão por parametro
  */

	$foo = "Escopo Global";

	function helloworld() {
		$foo = "Escopo Local";

		echo "Olá mundo de uma função <br />";
		global $foo; //Exibe variavel de escopo global no contexto local (dentro da funcao) - forma alteranti $GLOBALS['foo']
		echo $foo;   //Existe a variavel de escopo local
	}

	echo $foo;  //Exibe a var de escopo global
	echo '<br />';
	helloworld();

  //A variavel recebe a funcao passada
	$func = 'helloworld';
	$func(); //chamamos a funcão com o novo nome (o da variavavel)


  //Nesta função, caso alguma função for passada por parametro ele será executada
	function saveDataOnFile( $fn = null ) {
		//....
		//....
		if ( ! is_null($fn) ) $fn();
	}

	echo '<br />';
	saveDataOnFile( 'helloworld' );

	?>
</body>
</html>
