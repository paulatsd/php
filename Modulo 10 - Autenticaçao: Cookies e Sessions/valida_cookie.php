<?php

include ( 'conn.php' ); // Recupera a conexão

$login = '';
$senha = '';

// Recupera os valores de logins
if ( isset($_COOKIE['user_login']) ) $login = $_COOKIE['user_login'];
if ( isset($_COOKIE['user_pass']) ) $senha = $_COOKIE['user_pass'];

// Verifica se o registro existe no banco
if ( ! empty($login) && ! empty($senha) ) {
	$access = $conn->prepare("SELECT * FROM Users WHERE Login = :login AND Senha = :senha");
	$access->BindValue(':login', $login);
	$access->BindValue(':senha', $senha);

	// Executa a consulta
	if ( $access->execute() ) {
		$result = $access->fetch(PDO::FETCH_OBJ);

		//Se o cookie está inválido - remover valores do cookie
		if ( ! $result ) {
			setcookie('user_login');								// Removendo o valor do cookie
			setcookie('user_pass');									// Removendo o valor do cookie
			header("Location: login.php");
		}
	}
} else {
	header("Location: login.php");
}
