<?php if (!isset($_SESSION)){
		session_start();
	} ?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>Login: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="imagens/lojona.ico" >
</head>
<body>
	<div class="interface">
		<?php include "cabecalho.php"; ?>
		<div class="tela_usuario">
			<div class="tela_usuario_topo">
				<img src="imagens/user2.png">
				<h1>Login usuário</h1>
			</div>
			
			<div class="tela_usuario_formulario">
				<form method="post" action="processos/login.php">
				<p>	
           		 	<label for="email_login"><h2>Informe o email: </h2></label>
        	    	<input class="tela_usuario_formulario_login" name="email_login" required="required" type="text" placeholder="usuario@gmail.com"/>
        		</p>
           		<p> 
            		<label for="senha_login"><h2>Informe a senha: </h2></label>
    	        	<input class="tela_usuario_formulario_login" name="senha_login" required="required" type="password" placeholder="abc123@" /> 
          		</p>
          	
          		<button type="submit" value="Logar">Logar</button>
          		
           		</form>
           	</div>
           	<div class="tela_usuario_enviar">
            	<h3>Ainda não tem conta?</h3>
            	<a href="cadastro_cliente_form.php">Cadastre-se</a>
			</div>
	</div>
	<?php include "rodape.php"; ?>
</body>
</html>