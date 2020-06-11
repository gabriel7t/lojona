<?php
    require_once('processos/conexao.php');
    $codigo = '4';
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
	<title>iPad Mini: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="interface">
	<?php include "cabecalho.php"; ?>
	<section class="corpo">
		<div class="detalhes_pagina">
			
			<div class="detalhes_produto_topo">
				<div class="detalhes_produto_imagem">
					<img src="imagens/produtos/ipad/ipad-mini.png">
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
					
					<p>O iPad mini sempre foi queridinho pelo seu tamanho e capacidade. Agora ele vem com tudo para ser ainda mais adorado: chip A12 Bionic com Neural Engine, tela Retina de 7,9 polegadas com True Tone e compatibilidade com o Apple Pencil para você anotar suas melhores ideias assim que elas surgirem. iPad mini. De mini, só tem o tamanho...- Marca: Apple .- Código do fabricante: MUXD2BZ/A.- Sistema Operacional + Versão: iOS 12.- Loja de Aplicativos: App Store.- Tipo de Processador: Chip A12 Bionic.- Conectividade: GSM, GPRS, EDGE, 3G, 4G, Wi-Fi, Bluetooth e Roteador Wi-Fi.- E-mail: Sim.- Push E-mail: Sim.- Quantidade de Chip: 1.- Tipo de Chip: Nano.- USB: Lightning.- NFC: Não.- Função Telefone: Sim.- Sensores: Touch ID, Giroscópio de três eixos, Acelerômetro, Barômetro e Sensor de luz ambiente.- Tamanho do Display: 7,9".- Número de Pixels: 640 x 480 pixels.- Câmera traseira: Resolução 8 MP.- Câmera frontal resolução: 7 MP.- Gravação de Vídeo: Sim.- Resolução de reprodução: 2048 x 1536.- Gravação de vídeo: HD de 1080p.- Reprodução de Música: Sim.- MP3: Sim.- GPS: Sim.- Memória Interna: 256 GB.- Suporte a Cartão de Memória: Não.- Memória RAM: 256 GB.- Tipo de Bateria: Polímero de lítio.- Voltagem: Bi-Volt.- Conteúdo da Caixa: iPad Mini Wi-Fi + Cellular 256GB, Cabo Carregador USB-C, Carregador USB-C de 18W.- Dimensões do Aparelho (cm): 20.320 x 13.480 x 0.610.- Peso do Aparelho (g): 300
					</p>
				</div>			
				<h1>Características Técnicas</h1>

					<div class="informacao_produto_info">
						<h2>Tamanho e peso</h2>
						<p>Altura: 20.9 cm</p>
						<p>Largura: 13.7 cm</p>
						<p>Espessura: 6.3 cm</p>
						<p>Peso: 300 g</p>
					</div>

					<div class="informacao_produto_info">
						<h2>Tela</h2>
						<p>Tela Liquid Retina HD</p>
						<p>LCD 7,9" IPS</p>
						<p>Resolução de 640 x 480</p>
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
						<p>Touch ID</p>
						<p>Barômetro</p>
						<p>Giroscópio</p>
						<p>Acelerômetro</p>
						<p>Sensor de Proximidade</p>
						<p>Sensor de Luz ambiente</p>
					</div>

					<div class="informacao_produto_info">
						<h2>Conteúdo da caixa</h2>
						<p>iPad Mini 256gb</p>
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