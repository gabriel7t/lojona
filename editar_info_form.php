<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
	}
	require_once('processos/conexao.php');
	include('processos/valida_login.php');
	$codigo = $_SESSION['usuario'];
	$consulta1 = "SELECT * FROM cliente WHERE codigo = '$codigo'";
	$consulta2 = "SELECT * FROM endereco WHERE codigo_cliente = '$codigo'";

	$tab1 = $conexao->query($consulta1) or die ("deu erro");
	$tab2 = $conexao->query($consulta2) or die ("deu erro");

	$procura = "";
?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>Editar Cadastro: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="imagens/lojona.ico" >
</head>
<body>
	<div class="interface">
		<?php include "cabecalho.php"; ?>
	<div class="tela_cadastro">
		
        <h1>Editar Cadastro</h1>
	<div class="tela_cadastro_formulario">
        <form method="POST" action="processos/editar_info.php"> 
        <?php while ($dado1 = $tab1->fetch_array()) {?>
           	<h2>Dados Pessoais</h2>
         	<p> 
           		<label for="nome_edt">Informe seu nome completo*</label>
            	<input class="tela_cadastro_formulario_campo" name="nome_edt" required="required" type="text" value="<?php echo $dado1['nome'] ?>" />
          	</p>
           
          	<p> 
            	<label for="email_edt">informe seu email*</label>
            	<input class="tela_cadastro_formulario_campo" name="email_edt" required="required" type="email" value="<?php echo $dado1['email'] ?>"/> 
          	</p>

          	<p> 
            	<label for="cpf_edt">Informe seu CPF*</label>
            	<input class="tela_cadastro_formulario_campo" name="cpf_edt" required="required" size="11" maxlength="11" type="text" value="<?php echo $dado1['cpf'] ?>" />
          	</p>

          	<p> 
           		<label for="rg_edt">Informe seu RG</label>
            	<input class="tela_cadastro_formulario_campo" name="rg_edt" type="text" size="8" maxlength="8" value="<?php echo $dado1['rg'] ?>" />
          	</p>

          	<p> 
           		<label for="birth_edt">Informe sua data de nascimento*</label>
            	<input class="tela_cadastro_formulario_campo_data" name="birth_edt" required="required" type="date" value="<?php echo $dado1['nascimento'] ?>" />
          	</p>
        <?php }
        while ($dado2 = $tab2->fetch_array()) {?>
           	<p> 
           		<label for="rua_edt">Endereço*</label>
            	<input class="tela_cadastro_formulario_campo" name="rua_edt" required="required" type="text" value="<?php echo $dado2['rua'] ?>" />
          	</p>

          	<p>
          		<label for="bairro_edt">Bairro*</label>
				<input class="tela_cadastro_formulario_campo" name="bairro_edt" required="required" type="text" value="<?php echo $dado2['bairro'] ?>" />
			</p>
			<p>
				<label for="cep_edt">CEP*</label>
				<input class="tela_cadastro_formulario_campomenor" name="cep_edt" required="required" type="text" value="<?php echo $dado2['cep'] ?>" />
				<label for="num_edt">Número*</label>
            	<input class="tela_cadastro_formulario_campomenor" name="num_edt" required="required" type="text" value="<?php echo $dado2['numero'] ?>" />
          	</p>

          	<p>
          		<label for="estado_edt">Estado*</label>
				<input class="tela_cadastro_formulario_campo" name="estado_edt" required="required" type="text" value="<?php echo $dado2['uf'] ?>" />
			</p>
			<p>
				<label for="cidade_edt">Cidade*</label>
				<input class="tela_cadastro_formulario_campo" name="cidade_edt" required="required" type="text" value="<?php echo $dado2['cidade'] ?>" />         		
          	</p>
            <?php } ?>
            <button type="submit" value="Editar">Editar Cadastro</button>
        </form>
        
    </div>
    </div>

		<?php include "rodape.php"; ?>
	
</body>
</html>