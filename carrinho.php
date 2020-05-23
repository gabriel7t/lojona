<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>Carrinho: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="interface">
		<?php include "cabecalho.php"; ?>

		<div class="tela_carrinho">
			<h1>Carrinho de Compras</h1>
			<div class="tela_carrinho_lista">
				<p>
				<div class="tela_carrinho_conteudo">
					<div class="tela_carrinho_conteudo_imagem">
						<img src="imagens/produtos/iphone/iphone11.png" title="iPhone 11">
					</div>
					<div class="tela_carrinho_conteudo_lateral">
						<h2>iPhone 11 128GB Roxo</h2>
						<h3>A partir de R$ 4.499,90<h3>
						<h3>Em até 12x 374,99 SEM JUROS<h3>
						<h3>Frete GRATIS: Receba até 13 ou 18 de Abril<h3>
						<h3>Devolução GRÁTIS: até 30 dias a partir do recebimento<h3>
						<span>Quantidade</span>
						<input value="1" type="number" name="quantidade" min="1">
					</div>					
				</div>
				</p>

				<p>
				<div class="tela_carrinho_conteudo">
					<div class="tela_carrinho_conteudo_imagem">
						<img src="imagens/produtos/acessorios/lightning.png" title="Cabo Lightning">
					</div>
						<div class="tela_carrinho_conteudo_lateral">
						<h2>Cabo Lightning Original 1m</h2>
						<h3>A partir de R$ 89,90<h3>
						<h3>Em até 5x 17,99 SEM JUROS<h3>
						<h3>Frete GRATIS: Receba até 13 ou 18 de Abril<h3>
						<h3>Devolução GRÁTIS: até 30 dias a partir do recebimento<h3>
						<span>Quantidade</span>
						<input value="1" type="number" name="quantidade" min="1">
					</div>					
				</div>
				</p>
			</div>

			<div class="tela_carrinho_detalhes">
				
				<h2>Detalhes do Pedido</h2>
				<table>
					<tr>
						<td>Produtos (2)</td>
						<td>R$ 4.499,90</td>
					</tr>
					<tr>
						<td>Frete</td>
						<td>Grátis</td>
					</tr>
					<tr>
						<td>Total</td>
						<td>R$ 4.499,90</td>
					</tr>
				</table><br>
				
			
			</div>
			<a href="cartao-de-credito.php">Fechar Pedido</a>
		</div>
	</div>
	
	<?php include "rodape.php"; ?>
</body>
</html>