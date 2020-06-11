<?php
	if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
	//destroi a sessão do usuario a partir do botão no cabeçalho
	session_destroy();
	header('Location: ../tela_login.php');
	exit();
?>