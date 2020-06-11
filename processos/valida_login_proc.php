<?php
	if (session_status() == PHP_SESSION_NONE) {
  		session_start();
	}
	//processo para que somente o usuario logado veja suas informações
	if (!$_SESSION['usuario']) {
		header('Location: ../tela_login.php');
		exit();
	}