<!DOCTYPE html>
<html>
<head>
	<title>Módulo 8 - Aula 2 e 3 - Manipulando o Banco com PDO</title>
	<meta charset="utf-8"/>
</head>
<body>
	<?php
		include ( 'conn.php' );

    /*
    * Constantes da classe PDO:
    * FETCH_OBJ - retorna um array de objetos
    * FETCH_ASSOC - retorna uma array em formatos de array - Matriz
    */

		$qr 	= $conn->query("SELECT * FROM Users"); //Executa a consulta: retornar todos os usuários
		$result = $qr->fetchAll(PDO::FETCH_OBJ);    // Colocar todos os resultados na var $result - array de objetos - cada campo é um atributo do objeto -- Fecth (buscar)

		echo '<pre>';
		var_dump($result);
		echo '</pre>';

    // Percorrendo os registros - Permite acessar os campos do registro (viraram atributos do objeto)
		foreach( $result as $row ) {
			echo $row->Biografia;  //permite acessar as variaveis do objeto, pois colocamos os resultados como objetos
    }

		$email = isset($_GET['email']) ? $_GET['email'] : '';

    //Prepara a consulta e associa a variável $email ao placehold :email -> o valor da variável vai na consulta
		$stmt  = $conn->prepare("SELECT * FROM Users WHERE Email = :email ");
		$stmt->BindValue(':email', $email); //Liga o valor ao placehold

		if ( $stmt->execute() ) { //Executa a consulta
			$result = $stmt->fetchAll(PDO::FETCH_OBJ);

			var_dump($result);
		}

		//Prepara o o comando SQL
		$insert = $conn->prepare("INSERT INTO Users (Nome, Biografia, Login, Senha, Email)
								  VALUES (:nome, :biografia, :login, :senha, :email) ");

		//Dando um BindValue direto no comando execute - Ligando os valores aos placeholds
		$insert->execute(
			array(
					':nome' => 'Jonh2',
					':biografia' => 'Longa biografia',
			 		':login' => 'jonh',
			 		':senha' => sha1('1231'),
			 		':email' =>'jongh@email.com'
			)
		);

		$id = 3;
		$biografia = 'Minha longa biografia';
		$update = $conn->prepare("UPDATE Users SET Biografia = :biografia WHERE idUsers = :idUsers ");
		$update->BindValue(':biografia', $biografia, PDO::PARAM_STR); //No terceiro parametro está sendo passado o tipo do valor - String
		$update->BindValue(':idUsers', $id, PDO::PARAM_INT); //Tipo valor: Inteiro

		if ( $update->execute() ) {
			echo 'Alterado com sucesso' . '<br />';
		}

		$delete = $conn->prepare("DELETE FROM Users WHERE idUsers = :idUsers");
		$delete->execute( array( ':idUsers' => 3) );

	?>
</body>
</html>
