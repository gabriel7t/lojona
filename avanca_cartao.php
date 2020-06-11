<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	include('processos/valida_login.php');
	require_once('processos/conexao.php');
    $cod_usuario = $_SESSION['usuario'];
    $sql1 = "SELECT numero_cartao, nome_cartao, validade_m, validade_a, ccv FROM cartao WHERE codigo_cliente = '$cod_usuario'";
    $consulta = $conexao->query($sql1) or die ("Erro na operação 1");
?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>Continuar Compra: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="imagens/lojona.ico" >
</head>
<body>
	<div class="interface">
		<?php include "cabecalho.php"; ?>
	<div class="preencher_cartao">
		<div class="cartao_topo">
			<h1>Cartão de Crédito</h1>
			<h2>Abaixo estão as bandeiras aceitas</h2>
			<img src="imagens/pagts/pag_amex.png" title="AMEX">
			<img src="imagens/pagts/pag_boleto.png" title="Boleto Bancário">
			<img src="imagens/pagts/pag_diners.png" title="DinersClub">
			<img src="imagens/pagts/pag_elo.png" title="Elo">
			<img src="imagens/pagts/pag_itau.png" title="Banco Itau">
			<img src="imagens/pagts/pag_master.png" title="Mastercard">
			<img src="imagens/pagts/pag_visa.png" title="Visa">
		</div>

		<div class="cartao_formulario">
		
            <?php $tab = $consulta->fetch_array();  ?>
			<p>
				<label for="num_card">Número do Cartão > </label>
            	<?php echo $tab['numero_cartao']; ?>
			</p>
			<p>
				<label for="num_card">Nome impresso no cartão > </label>
            	<?php echo $tab['nome_cartao']; ?>
			</p>
			<p>
				<label for="num_card">Validade (MM/AA) > </label>
            	<?php echo $tab['validade_m']; ?> /
            	<?php echo $tab['validade_a']; ?>
			</p>
			<p>
				<form method="POST" action="processos/adiciona_parcelas.php">
				Parcelas: <input type="number" value="1" name="parcela" min="1" max="12">
			</p>
				<button type="submit" value="Continuar">Continuar</button>
				</form>
				<div class="cadastro_enviar">
					<br><a href="cartao-de-credito.php">Acidionar Cartão</a>
				</div>
			
		</div>
		
	</div>
	</div>
		<?php include "rodape.php"; ?>
	
</body>
</html>