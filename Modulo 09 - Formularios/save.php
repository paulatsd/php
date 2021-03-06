<?php

/*
* Classe responsável por fazer a validação do lado do servidor
*/

include ('conn.php');

//Verifica se tem requisição do tipo POST e se tem um campo com o nome dado ao botão no formulário - identifica o form
if ( $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['msg_submited']) ) {

  //Verifica se os campos estão definidos e atribuem seu valor à variável correspondente
	$name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
	$email = isset($_POST['user_email']) ? $_POST['user_email'] : '';
	$subject = isset($_POST['msg_subject']) ? $_POST['msg_subject'] : '';
	$msg = isset($_POST['msg_content']) ? $_POST['msg_content'] : '';

	$validate = true;
	$validate &= ! empty( $name );
	$validate &= ! empty( $email ) && filter_var($email, FILTER_VALIDATE_EMAIL); //Validade se é um e-mail
	$validate &= ! empty( $subject );
	$validate &= ! empty( $msg ) && strlen($msg) >=3;

	if ( $validate ) {
		$stmt = $conn->prepare("INSERT INTO RegistrosForm (Name,Email,Assunto,Mensagem) VALUES (:name, :email, :assunto, :mensagem)");
		$stmt->BindValue(':name', $name);
		$stmt->BindValue(':email', $email);
		$stmt->BindValue(':assunto', $subject);
		$stmt->BindValue(':mensagem', $msg);

		if ( $stmt->execute() ) {
			echo "Mensagens Salvas com sucesso";
			echo '<a href="contactform.php">Voltar</a>';
		} else {
			echo "Erro, contacte o administrador";
		}
	} else {
		echo 'Erro de Validação';
	}

}
