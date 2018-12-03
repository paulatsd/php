<?php

/* Conectando à aplicação ao bando de $dados
PDO - Classe utilizada para realizar conexão conexão com o banco
Esta possui um série de métodos para trabalhar com o banco
*/

define('DBNAME', 'SimpleApp');
define('DBUSER', 'root');
define('DBPASS', 'root');

try{
  //criando a conexão (driverSQL, host, nome do banco, usuário e senha)
	$conn = new PDO('mysql:host=localhost;dbname=' . DBNAME, DBUSER, DBPASS);
} catch ( PDOException $e ) {
	echo "Erro: " . $e->getMessage() . " <br />";
}
