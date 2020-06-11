<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	require_once('conexao.php');

	if(empty($_POST['email_login']) || empty($_POST['senha_login'])){
		header('Location: ../tela_login.php');
		exit();
	}

$email = mysqli_real_escape_string($conexao, $_POST['email_login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha_login']);

//faz o login de um usuário existente
$query = "SELECT codigo, nome FROM cliente WHERE email = '{$email}' AND senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

//procura o código do cliente
$query2 = "SELECT codigo FROM cliente WHERE email = '{$email}'";
$cod_query = $conexao->query($query2) or die ("deu erro");

$arcod_cliente = $cod_query->fetch_array();
$cod_cliente = $arcod_cliente['codigo'];

//inicia uma sessão com o codigo do cliente para futuras requisições
if($row == 1){
	$_SESSION['usuario'] = $cod_cliente;
	header('Location: ../tela_usuario.php');
	exit();
}else{
	header('Location: ../tela_login.php');
	exit();
}
?>