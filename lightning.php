<?php
	require_once('processos/conexao.php');
	$codigo = '2';
	$consulta = "SELECT * FROM produtos WHERE codigo = '$codigo' ";

	$tab1 = $conexao->query($consulta) or die ("deu erro");
	while ($dado1 = $tab1->fetch_array()) {
        $descricao = $dado1['descricao'];
		$preco = number_format($dado1['preco'], '2');
        $parcela = number_format($dado1['preco'] / 12, '2');
?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>Cabo Lighning: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="interface">
	<?php include "cabecalho.php"; ?>
	<section class="corpo">
		<div class="detalhes_pagina">
			
			<div class="detalhes_produto_topo">
				<div class="detalhes_produto_imagem">
					<img src="imagens/produtos/acessorios/lightning.png">
				</div>
				
				<div class="detalhes_produto_lateral">
					<h1><?php echo $descricao ?></h1>
					<div class="detalhes_produto_preco">
						<h1>R$ <?php echo  $preco ?> à vista</h1>
						<h2>ou 12x de <?php echo $parcela ?> SEM JUROS</h2>
						<form method="POST" action="processos/cria_carrinho.php">
                        <input value="<?php echo $codigo; ?>" type="number" name="codigo_pedido" hidden><br>
                        <button type="submit" value="Adicionar">Adicionar ao carrinho</a>
                    </form>
					</div>
				</div>
				<?php }?>
			</div>

			<div class="detalhes_produto_secao">
				<div class="informacao_produto_info">
					
					<p>Use este cabo USB 2.0 para conectar seu iPhone, iPad ou iPod com conector Lightning à porta USB do seu computador. Com ele você sincroniza o dispositivo e carrega a bateria. Ou conecte o cabo a um carregador Apple USB para plugar na tomada
					</p>
				</div>			
                <h1>Características Técnicas</h1>
                
					<div class="informacao_produto_info">
						<h2>Tamanho e peso</h2>
						<p>Peso: 30 gr</p>
						<p>Comprimento: 1 metro</p>
					</div>
				</div>

					<div class="informacao_produto_info">
						<h2>Caracteristicas</h2>
						<p>Cabo Lightning para USB</p>
						<p>Cor: Branco</p>
						<p>Referência: MD818BZ/A</p>
					</div>
				</div>

					<div class="informacao_produto_info">
						<h2>Compatibilidade</h2>
						<p>iPhone XS Max</p>
                        <p>iPhone XR</p>
                        <p>iPhone 8 / 8 Plus</p>
                        <p>iPhone 7 / 7 Plus</p>
                        <p>iPhone SE</p>
                        <p>iPhone 6 / 6s Plus</p>
                        <p>iPad</p>
                        <p>iPod</p>
					</div>

					<div class="informacao_produto_info">
						<h2>Conteúdo da caixa</h2>
						<p>1 Cabo Lightning para USB Apple</p>
					</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</section>

	<footer class="barra_inferior">
			<div class="logo_barra_inferior">
				<img src="imagens/lojONa.png">
			</div>
			<div class="canais_atendimento">
				<a href="atendimento.php"><h3>Atendimento</h3></a>
				<a href="#"><h3>Twitter</h3></a>
				<a href="#"><h3>Facebook</h3></a>
				<a href="sobre"><h3>Sobre Nós</h3></a>
			</div>
		</footer>
	</div>
</body>
</html>