<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
require_once('conexao.php');
	$cod_endereco = $_SESSION['usuario'];
	$nomerua_cad=$_POST['nomerua_cad'];
	$bairro_cad=$_POST['bairro_cad'];
	$cep_cad=$_POST['cep_cad'];
	$estado_cad=$_POST['estado_cad'];
	$cidade_cad=$_POST['cidade_cad'];
	$num_cad=$_POST['num_cad'];

	//cadastra o endereço do usuario a partir do formulario de cadastro de endereço
	$sql2 = "INSERT INTO endereco (codigo_cliente, rua, bairro, cep, uf, cidade, numero) VALUES ('$cod_endereco','$nomerua_cad','$bairro_cad','$cep_cad','$estado_cad','$cidade_cad','$num_cad' )";

	$conexao->query($sql2) or die ("Usuário já cadastrado");

	header("Location: ../tela_usuario.php");

?>