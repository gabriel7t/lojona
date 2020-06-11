<?php

	require_once('processos/conexao.php');

	$conta = "0";
	if($_POST['pesquisar'] == "" OR $_POST['pesquisar'] == NULL){
		$pesquisa = "0";
	}else{
		$pesquisa = $_POST['pesquisar'];
		$consulta = "SELECT imagens, descricao, preco FROM produtos WHERE descricao LIKE '%$pesquisa%'";
		$tab = $conexao->query($consulta) or die ("deu erro 1");
		//consulta quantos produtos há no carrinho
		$consulta2 = "SELECT COUNT(*) AS qtd FROM produtos WHERE descricao LIKE '%$pesquisa%'";
		$tab2 = $conexao->query($consulta2) or die ("deu erro 2");
		while ($dado2 = $tab2->fetch_array()) {
			$qtd = $dado2['qtd'];
		}
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
			<h1>Resultados de Pesquisa</h1>
			<div class="tela_carrinho_lista">
				<?php if(!$pesquisa == '0') {	//mostra uma mensagem se a barra de pesquisa estiver vazio
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
					</div>					
				</div>
				</p>
				<?php $conta++;} } }else{ ?> 	
					<h2>Pesquisa Vazia</h2>
					<img src="imagens/vazio.png" title="Carrinho Vazio"> "; 
				<?php } ?>
			</div>
	</div>
	
	<?php include "rodape.php"; ?>
</body>
</html>