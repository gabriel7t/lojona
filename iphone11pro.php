<?php
	require_once('processos/conexao.php');
	$codigo = '6';
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
	<title>iPhone 11 PRO: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="interface">
	<?php include "cabecalho.php"; ?>
	<section class="corpo">
		<div class="detalhes_pagina">
			
			<div class="detalhes_produto_topo">
				<div class="detalhes_produto_imagem">
					<img src="imagens/produtos/iphone/iphone11-pro.png">
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
					
					<p>O iPhone 11 PRO tem novo sistema de câmera tripla para capturar mais do que você vê e ama. 
                        Ele vem com o chip mais rápido em um smartphone. E bateria para o dia todo: você faz muito e recarrega pouco. 
                        Também tem a melhor qualidade de vídeo em um celular. Assim, suas memórias ficam inesquecíveis de verdade. 
                        Novo sistema de câmera tripla. Amplie os horizontes das suas fotos indo da câmera grande-angular para a novíssima ultra-angular. 
                        Também veja e capture mais com a interface redesenhada, que usa a câmera ultra-angular para mostrar o que está 
                        fora do enquadramento. E descubra como gravar e editar vídeos agora é tão simples quanto tirar fotos. É a câmera 
                        mais popular do mundo, com uma nova perspectiva. Grave e edite vídeos com a maior qualidade em um smartphone. 
                        Ambas as câmeras do iPhone 11 gravam vídeos 4K nítidos a 60 qps. A nova câmera ultra-angular captura 4x mais de qualquer 
                        cena e é ideal para objetos em movimento, como seu cachorro correndo no parque. E, com o zoom de áudio, o som se aproxima 
                        junto com a imagem. Perfeito para filmar a apresentação de fim de ano na escola dos seus filhos. Além disso, editar vídeos 
                        ficou tão simples quanto editar fotos. Nova câmera ultra-angular. Pense grande, muito grande. Com a nova câmera 
                        ultra-angular, você captura até quatro vezes mais de cada imagem. As paisagens vão parecer não ter fim. Os shows vão 
                        revelar o tamanho da multidão. E as fotos de férias vão mostrar a família inteira incluindo as vistas que vocês viajaram 
                        tanto para ver.
					</p>
				</div>			
				<h1>Características Técnicas</h1>

					<div class="informacao_produto_info">
						<h2>Armazenamento</h2>
						<p>256GB de Armazenamento (não expansível)</p>
					</div>

					<div class="informacao_produto_info">
						<h2>Tamanho e peso</h2>
						<p>Altura: 144.9 mm</p>
						<p>Largura: 71.7 mm</p>
						<p>Espessura: 8.1 mm</p>
						<p>Peso: 226 gr</p>
						<p>Brilho máximo de 800 nits</p>
					</div>

					<div class="informacao_produto_info">
						<h2>Tela</h2>
						<p>Full HD</p>
						<p>HDR 5,8" OLED</p>
						<p>Resolução de 1792 x 828 pixels a 326 ppp</p>
					</div>

					<div class="informacao_produto_info">
						<h2>Chipset</h2>
						<p>A13 Bionic</p>
						<p>Memória RAM 4GB</p>
					</div>
				
					<div class="informacao_produto_info">
						<h2>Armazenamento</h2>
						<p>256GB de Armazenamento (não expansível)</p>
					</div>

					<div class="informacao_produto_info">
						<h2>Sensores</h2>
						<p>Face ID</p>
						<p>Barômetro</p>
						<p>Giroscópio</p>
						<p>Acelerômetro</p>
						<p>Sensor de Proximidade</p>
						<p>Sensor de Luz ambiente</p>
					</div>

					<div class="informacao_produto_info">
						<h2>Conteúdo da caixa</h2>
						<p>iPhone 11 PRO</p>
						<p>EarPods com conector Lightning</p>
						<p>Cabo Lightning para USB</p>
						<p>Carregador USB</p>
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