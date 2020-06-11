<?php 
	if (!isset($_SESSION)){
		session_start();
	}
	require_once('processos/conexao.php');
	//verifica se há um usuario logado e exibe seu nome no cabeçalho
	if (!$_SESSION) {
		$nome = 'Entrar na conta';
	}else{
		$querynome = "SELECT nome FROM cliente WHERE codigo = '{$_SESSION['usuario']}'";
		$querynome2 = $conexao->query($querynome) or die ("deu erro");

		$arnome = $querynome2->fetch_array();
		$nome = $arnome['nome'];
	}
?>

<script type="text/javascript" src="js/jquery.js"></script>


<div class="cabecalho">
	<div class="cabecalho_conteudo">
		<figure class="logo_imagem">
			<a href="index.php"><img src="imagens/lojONa.png"></a>
		</figure>

		<div class="barra_pesquisa">
			<form method="POST" action="resultado_pesquisa.php">
				<input id="barra" type="text" name="pesquisar" placeholder="Digite para pesquisar">
				<button onclick="resultado_pesquisa.php" type="submit" value="pesquisar"> </button>
			</form>
		</div>

		<div class="botao_carrinho-login">
			<ul type="disc">
				<li><a href="carrinho.php"><img src="imagens/shopping-cart.png"></a></li>
				<li><a href="tela_usuario.php"><img src="imagens/user.png"></a></li>
				<h3>Olá, <?php echo $nome; ?> </h3>
				<a href="processos/logout.php"><h4>Sair<h4></a>
			</ul>
		</div>
	</div>
</div>

<nav class="navegar">
	<ul>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="iphone.php">iPhone</a></li>
		<li><a href="ipad.php">iPad</a></li>
		<li><a href="macbook.php">MacBook</a></li>
		<li><a href="acessorios.php">Acessórios</a></li>
		<li><a href="404.php">Ofertas</a></li>
		<li><a href="404.php">Serviços</a></li>
		<li><a href="404.php">Filtros</a></li>
	</ul>
</nav>

