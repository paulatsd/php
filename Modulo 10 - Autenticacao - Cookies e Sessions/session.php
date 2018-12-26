<?php



/**
* Session armazenam as informações durante a sessão do usuário. Ao fechar o navegador a session se encerra.
* Forma robusta de salvar informações de forma temporária
* Utilizadas para realizar Autenticação; Salvar infors que precisam ser passadas de um pag para outra e não pode
* ser por GET ou POST
*/

session_start(); // Para iniciar o uso das sessions

include ('conn.php');

$login = $_POST['user_login'];
$senha = $_POST['user_pass'];

$access = $conn->prepare("SELECT * FROM Users WHERE Login = :login AND Senha = :senha");
$access->BindValue(':login', $login);
$access->BindValue(':senha', sha1($senha));

if ( $access->execute() ) {
	$result = $access->fetch(PDO::FETCH_OBJ);
	if ( $result ) {
		$user_session = ['user_login' => $login, 'user_pass' => sha1($senha) ];
		$_SESSION['user_data'] = $user_session; //criando um campo na SESSION e atribuindo-o um array

		header("Location: home_session.php");
	}
}
