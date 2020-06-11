<?php
	session_start();
	require_once('processos/conexao.php');
	include('processos/valida_login.php');
	$codigo = $_SESSION['usuario'];
	$consulta1 = "SELECT * FROM cliente WHERE codigo = '$codigo'";
	$consulta2 = "SELECT * FROM endereco WHERE codigo_cliente = '$codigo'";

	$tab1 = $conexao->query($consulta1) or die ("deu erro");
	$tab2 = $conexao->query($consulta2) or die ("deu erro");

	$procura = "";
?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>Cadastro: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="imagens/lojona.ico" >
</head>
<body>
	<div class="interface">
		<?php include "cabecalho.php"; ?>
	<div class="tela_cadastro">
		
		<h1>Dados do Cliente</h1>

	<div class="tela_cadastro_formulario">
		    <h2>Dados Pessoais</h2>
		<table>
			<?php while ($dado1 = $tab1->fetch_array()) {?>
			<tr>
				<td>Nome:</td>
				<td><?php echo $dado1['nome'] ?></td>
			</tr>
			<tr>
				<td>CPF:</td>
				<td><?php echo $dado1['cpf'] ?></td>
			</tr>
			<tr>
				<td>RG:</td>
				<td><?php echo $dado1['rg'] ?></td>
			</tr>
			<tr>
				<td>Nascimento:</td>
				<td><?php echo $dado1['nascimento'] ?></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><?php echo $dado1['email'] ?></td>
			</tr>
			<tr>
				<td>Senha:</td>
				<td>******</td>
			</tr>
		<?php } ?>
		</table>
		<h2>Dados de endereço</h2>
		<table>
			<?php while ($dado2 = $tab2->fetch_array()) {
				$procura = $dado2['rua']?>
			<tr>
				<td>Rua:</td>
				<td><?php echo $dado2['rua'] ?></td>
			</tr>
			<tr>
				<td>Bairro:</td>
				<td><?php echo $dado2['bairro'] ?></td>
			</tr>
			<tr>
				<td>CEP:</td>
				<td><?php echo $dado2['cep'] ?></td>
			</tr>
			<tr>
				<td>UF:</td>
				<td><?php echo $dado2['uf'] ?></td>
			</tr>
			<tr>
				<td>Cidade:</td>
				<td><?php echo $dado2['cidade'] ?></td>
			</tr>
			<tr>
				<td>Número:</td>
				<td><?php echo $dado2['numero'] ?></td>
			</tr>
			<?php }?>
		</table>
	</div>
	<?php if($procura == "") {?>
			<div class="usuario_editar">
        		<br><a href="cadastro_endereco_form.php">Adicionar Endereço</a>
			</div>
	<?php } ?>
	<div class="cadastro_enviar">
        <br><br><a href="editar_info_form.php">Editar Informações</a>
    </div>
        
    </div>
    </div>

		<?php include "rodape.php"; ?>
	
</body>
</html>