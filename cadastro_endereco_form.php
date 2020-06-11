<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>Cadastro: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="imagens/lojona.ico" >
</head>
<body>
	<div class="interface">
		<?php include "cabecalho.php"; ?>
	<div class="tela_cadastro">
		
		<h1>Cadastro de Usuário</h1>
	<div class="tela_cadastro_formulario">
		    <form method="POST" action="processos/cadastro_endereco.php"> 
           	
           <h2>Endereço</h2>

           	<p> 
           		<label for="rua_cad">Endereço*</label>
            	<input class="tela_cadastro_formulario_campo" name="nomerua_cad" required="required" type="text" placeholder="Rua 1" />
          	</p>

          	<p>
          		<label for="bairro_cad">Bairro*</label>
				      <input class="tela_cadastro_formulario_campo" name="bairro_cad" required="required" type="text" placeholder="Centro" />
            </p>
            <p>
				      <label for="cep_cad">CEP*</label>
				      <input class="tela_cadastro_formulario_campomenor" name="cep_cad" required="required" type="text" placeholder="69077010" />
				      <label for="num_cad">Número*</label>
            	<input class="tela_cadastro_formulario_campomenor" name="num_cad" required="required" type="text" placeholder="45" />
          	</p>

          	<p>
          		<label for="estado_cad">Estado*</label>
				      <input class="tela_cadastro_formulario_campo" name="estado_cad" required="required" type="text" placeholder="São Paulo" />
            </p>
            <p>

				      <label for="cidade_cad">Cidade*</label>
				      <input class="tela_cadastro_formulario_campo" name="cidade_cad" required="required" type="text" placeholder="Santos" />
          	</p>

            <button type="submit" value="Cadastrar"/>Cadastrar</button>
        </form>
        
        <div class="cadastro_enviar">
			<h2>Já tem conta?</h2>
            <a href="tela_login.php"> Ir para Login </a>
        </div>
	</div>
        
    </div>
    </div>

		<?php include "rodape.php"; ?>
	
</body>
</html>

