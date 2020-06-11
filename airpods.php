<?php
	require_once('processos/conexao.php');
	$codigo = '3';
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
	<title>Airpods: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="interface">
	<?php include "cabecalho.php"; ?>
	<section class="corpo">
		<div class="detalhes_pagina">
			
			<div class="detalhes_produto_topo">
				<div class="detalhes_produto_imagem">
					<img src="imagens/produtos/acessorios/airpods.png">
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
					
					<p>Os novos AirPods combinam design inteligente, tecnologia inovadora e som de alta qualidade. Eles usam toda a potência do novo chip H1, criado pela Apple exclusivamente para fones de ouvido, e oferecem acesso à Siri só com a voz e até três horas para conversar com apenas uma carga. Ligam automaticamente e ficam sempre conectados. Configuração com apenas um toque para todos os seus aparelhos Apple. Acesso rápido à Siri: é só dizer “ E aí, Siri” . Dois toques para reproduzir ou trocar de música .O novo chip H1, desenvolvido pela Apple para fones de ouvido, oferece conexão sem fio rápida com seus aparelhos . Recarga rápida no estojo. Possibilidade de recarregar o estojo com um conector Lightning. Áudio e voz de alta qualidade. Alterne facilmente entre seus aparelhos. O estojo de recarga proporciona várias cargas adicionais para ouvir música e conversar o dia todo
					</p>
			</div>			
				<h1>Características Técnicas</h1>

					<div class="informacao_produto_info">
						<h2>Características</h2>
						<p>Marca: Apple</p>
						<p>Modelo: MRXJ2BE/A</p>
					</div>

					<div class="informacao_produto_info">
						<h2>Tamanho e Peso</h2>
						<p>Altura: 53,5 mm</p>
						<p>Largura: 44,3 mm</p>
						<p>Espessura: 21,3 mm</p>
						<p>Peso: 45 gr</p>
					</div>

					<div class="informacao_produto_info">
						<h2>Especificações</h2>
						<p>Conexões: Recarrega usando um carregador sem fio (padrão Qi) ou um conector Lightning</p>
						<p>Garantia de 12 meses</p>
						<p>Compatível com AirPods (1ª geração ou posterior)</p>
					</div>

					<div class="informacao_produto_info">
						<h2>Conteúdo da caixa</h2>
						<p>Apple Airpods</p>
						<p>Cabo Lightning para USB</p>
						<p>Estojo com recarga sem fio</p>
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