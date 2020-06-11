<?php
require_once('conexao.php');
	
	$nome_cad=$_POST['nome_cad'];
	$cpf_cad=$_POST['cpf_cad'];
	$rg_cad=$_POST['rg_cad'];
	$birth_cad=$_POST['birth_cad'];
	$email_cad=$_POST['email_cad'];
	$senha_cad=$_POST['senha_cad'];

	//cadastra um novo cliente a partir do formulario de cadastro
	$sql = "INSERT INTO cliente (nome, cpf, rg, nascimento, email, senha) VALUES ('$nome_cad','$cpf_cad','$rg_cad','$birth_cad','$email_cad', md5('$senha_cad') )";

	$conexao->query($sql) or die ("Usuário já cadastrado");

	header("Location: ../tela_login.php");
?>
