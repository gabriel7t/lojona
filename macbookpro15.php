<?php
	require_once('processos/conexao.php');
	$codigo = '5';
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
	<title>MacBook Pro 15": lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="interface">
	<?php include "cabecalho.php"; ?>
	<section class="corpo">
		<div class="detalhes_pagina">
			
			<div class="detalhes_produto_topo">
				<div class="detalhes_produto_imagem">
					<img src="imagens/produtos/macbook/macbook-pro15.png">
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
					
					<p>O MacBook Pro 2019 Apple leva o notebook para outro patamar de eficiência e mobilidade. Com recursos como processadores e memória de alto desempenho, chips gráficos avançados e armazenamento ultrarrápido, todas as suas ideias ganham fôlego para ir muito mais longe. Especificações Técnicas Processador: Intel Core i7 (8ª Geração)Velocidade: 2.2Ghz até 4.3Ghz com turbo boost (9MB) Memória RAM: 16GB - DDR4 (onboard)Expansível até: 32GB Armazenamento: SSD 512GBTela: 15" Retina - LED-backlit com IPS technologyResolução: 2880x1800Gráfico: AMD Radeon PRO 560X - 2GB GDDR5 Touch Bar: Integrado com Touch ID Conectividade: 802.11 ac Wireless - IEEE 802.11 a/b/g/n/ Bluetooth 5.0 Portas: 04x USB
					</p>
				</div>			
				<h1>Características Técnicas</h1>

				
					<div class="informacao_produto_info">
						<h2>Armazenamento</h2>
						<p>512GB de Armazenamento (não expansível)</p>
					</div>
						
					<div class="informacao_produto_info">
						<h2>Tamanho e peso</h2>
						<p>Altura: 24,07 cm</p>
						<p>Largura: 34,93 cm</p>
						<p>Espessura: 1,55 cm</p>
						<p>Peso: 1,83 kg</p>
					</div>
				
					<div class="informacao_produto_info">
						<h2>Tela</h2>
						<p>Tela Retina LED</p>
						<p>LCD 16,6" IPS</p>
						<p>Resolução de 2880x1800 pixels</p>
					</div>
								
					<div class="informacao_produto_info">
						<h2>Chipset</h2>
						<p>Intel Core i7 @ 2.2 GHz</p>
                        <p>Memória RAM 16GB</p>
                        <p>Placa de Vídeo: Radeon Pro 455 - 2 GB GDDR5</p>
					</div>
												
					<div class="informacao_produto_info">
						<h2>Armazenamento</h2>
						<p>512GB de Armazenamento SSD</p>
					</div>
								
					<div class="informacao_produto_info">
						<h2>Sensores</h2>
						<p>Bluetooth 4.2</p>
						<p>Wireless Wi-Fi 802.11ac</p>
						<p>Touch ID</p>
						<p>Sensor de Luz ambiente</p>
					</div>
							
					<div class="informacao_produto_info">
						<h2>Conteúdo da caixa</h2>
						<p>Macbook Pro</p>
						<p>Cabo Carregador USB-C 2m</p>
						<p>Carregador USB 87W</p>
						<p>Documentação Apple</p>
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