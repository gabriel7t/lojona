<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	require_once('processos/conexao.php');
	include('processos/valida_login.php');
	$cod_usuario = $_SESSION['usuario'];
	$conta = "0";
	//consulta os dados dos produtos do carrinho
	$consulta = "SELECT produtos.imagens, produtos.descricao, produtos.preco, codigo_produto FROM carrinho 
	INNER JOIN produtos ON produtos.codigo = carrinho.codigo_produto WHERE codigo_cliente = '$cod_usuario'";
	$tab = $conexao->query($consulta) or die ("deu erro");
	//consulta quantos produtos há no carrinho
	$consulta2 = "SELECT COUNT(*) AS qtd FROM carrinho WHERE codigo_cliente = '$cod_usuario'";
	$tab2 = $conexao->query($consulta2) or die ("deu erro");
	while ($dado2 = $tab2->fetch_array()) {
		$qtd = $dado2['qtd'];
	}
	
?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>Carrinho: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="imagens/lojona.ico" >
</head>
<body>
	<div class="interface">
		<?php include "cabecalho.php"; ?>

		<div class="tela_carrinho">
			<h1>Carrinho de Compras</h1>
			<div class="tela_carrinho_lista">
				<?php if(!$qtd == '0') {	//mostra uma mensagem se o carrinho estiver vazio
					while ($conta < $qtd){
						while ($dado = $tab->fetch_array()) { ?>
				<p>
				<div class="tela_carrinho_conteudo">
					<div class="tela_carrinho_conteudo_imagem">
						<img src="<?php echo( $dado['imagens']); ?>" title="iPhone 11">
					</div>
					<div class="tela_carrinho_conteudo_lateral">
						<h2><?php echo $dado['descricao']; ?></h2>
						<h3> R$ <?php echo number_format($dado['preco'],'2', ',', '.'); ?></h3>
						<h3>Em até 12x <?php echo number_format($dado['preco']/ 12 ,'2', ',', '.');?> SEM JUROS</h3>
						<h3>Frete GRATIS: Receba até 13 ou 18 de Abril</h3>
						<h3>Devolução GRÁTIS: até 30 dias a partir do recebimento</h3>
					 	<h3><a id="remove" href="processos/remover_carrinho.php?id=<?php echo $dado['codigo_produto'] ?>">Remover</a>						
						
					</div>					
				</div>
				</p>
				<?php $conta++;} } }else{ ?> 	
						<h2>Carrinho Vazio</h2>
						<img src="imagens/vazio.png" title="Carrinho Vazio"> "; 
					<?php } ?>
			</div>

			<div class="tela_carrinho_detalhes">
				<?php 
					$consulta3 = "SELECT COUNT(*) AS qtd1, FORMAT(SUM(produtos.preco),'2') AS total FROM carrinho 
					INNER JOIN produtos ON produtos.codigo = carrinho.codigo_produto WHERE codigo_cliente = '$cod_usuario'";
					$tab3 = $conexao->query($consulta3) or die ("deu erro");
				?>
				<h2>Detalhes do Pedido</h2>
				<table>
					<?php while ($dado2 = $tab3->fetch_array()) { ?>
					<tr>
						<td>Produtos (<?php echo $dado2['qtd1']; ?>)</td>
						<td>R$ <?php echo $dado2['total']; ?></td>
					</tr>
					<tr>
						<td>Frete</td>
						<td>Grátis</td>
					</tr>
					<tr>
						<td>Total</td>
						<td>R$ <?php echo $dado2['total']; ?></td>
					</tr>
					<?php } ?>
				</table><br>
				
			
			</div>
			<a href="processos/cadastra_compra.php">Fechar Pedido</a>
		</div>
	</div>
	
	<?php include "rodape.php"; ?>
</body>
</html>