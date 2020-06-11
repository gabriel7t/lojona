<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	include('processos/valida_login.php');
?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>Cadastrar Cartão: lojONa</title>
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
		<form method="POST" action="processos/armazena_cartao.php">
			<h3>*Obrigatório</h3>
			<p>
				<label for="num_card">Número do Cartão*</label>
            	<input class="cartao_formulario_campo" name="num_card" required="required" size="16" maxlength="16" type="text" placeholder="0000 0000 0000 0000" />
			</p>

			<p>
				<label for="num_card">Nome impresso no cartão*</label>
            	<input class="cartao_formulario_campo" name="nome_card" required="required" size="25" maxlength="25" type="text" placeholder="FRANCISCO A SILVA" />
			</p>

			<p>
				<label for="num_card">Validade (MM/AA)*</label>
            	<input class="cartao_formulario_campo_menor" name="val1_card" required="required" size="2" maxlength="2" type="text" placeholder="DD" />
            	<input class="cartao_formulario_campo_menor" name="val2_card" required="required" size="2" maxlength="2" type="text" placeholder="AA" />
			</p>

			<p>
				<label for="ccv_card">CCV*</label>
            	<input class="cartao_formulario_campo_menor" name="ccv_card" required="required" size="4" maxlength="4" type="text" placeholder="CCV" />
			</p>

			<p>
				Parcelas: <input type="number" value="1" name="quantidade" min="1" max="12">
			</p>

			<button type="submit" value="Continuar">Continuar</button>
		</form>
			
		</div>
		
	</div>
	</div>
		<?php include "rodape.php"; ?>
	
</body>
</html>