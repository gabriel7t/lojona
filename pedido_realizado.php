<?php
	session_start();
	require_once('processos/conexao.php');
	$codigo = $_SESSION['usuario'];

	$consulta1 = "SELECT MAX(codigo) as ultimo FROM compra WHERE codigo_cliente = '$codigo'";
	$tab1 = $conexao->query($consulta1) or die ("deu erro");
	while ($row = $tab1->fetch_array()) {
        $ultimopedido = $row['ultimo'];
    }

	$consulta2 = "SELECT codigo, totalvalor, parcelas FROM compra WHERE codigo = '$ultimopedido' AND codigo_cliente = '$codigo'";
	$tab2 = $conexao->query($consulta2) or die ("deu erro");

?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>Pedido Realizado: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="imagens/lojona.ico" >
</head>
<body>
	<div class="interface">
		    <?php include "cabecalho.php"; ?>
	    <div class="tela_cadastro">
		    <h1>Pedido Realizado!</h1>
	        <div class="tela_cadastro_formulario">
                <h2>Pedido Realizado</h2>
				<img src="imagens/correios.png" title="Correios Trabalhando">
                <?php while ($dado = $tab2->fetch_array()) { ?>
                <h4>Pedido nº: <?php echo $dado['codigo']; ?></h4>
                <h4>Valor do Pedido: <?php echo number_format($dado['totalvalor'],'2', ',', '.'); ?></h4>
                <h4>Parcelas: <?php echo $dado['parcelas']; ?>X</h4>
                <h2>Obrigado pela preferência!</h2>
                <?php } ?>
	        </div>
		    <div class="usuario_editar">
         	<br><a href="index.php">Continuar comprando</a>
		    </div>
    </div>
    </div>

		<?php include "rodape.php"; ?>
	
</body>
</html>