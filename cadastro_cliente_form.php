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
		    <form method="POST" action="processos/cadastro_cliente.php"> 
           	
            <h2>Dados Pessoais</h2>
           	<h3>* Obrigatório</h3>
         	  <p> 
           		<label for="nome_cad">Informe seu nome completo*</label>
            	<input class="tela_cadastro_formulario_campo" name="nome_cad" required="required" type="text" placeholder="Francisco da Silva" />
          	</p>
           
          	<p> 
            	<label for="email_cad">informe seu email*</label>
            	<input class="tela_cadastro_formulario_campo" name="email_cad" required="required" type="email" placeholder="usuario@gmail.com"/> 
          	</p>
           
          	<p> 
            	<label for="senha_cad">Cria uma senha*</label>
            	<input class="tela_cadastro_formulario_campo" name="senha_cad" required="required" type="password" placeholder="abc123@"/>
          	</p>

          	<p> 
            	<label for="cpf_cad">Informe seu CPF*</label>
            	<input class="tela_cadastro_formulario_campo" name="cpf_cad" required="required" size="11" maxlength="11" type="text" placeholder="Somente Números" />
          	</p>

          	<p> 
           		<label for="rg_cad">Informe seu RG</label>
            	<input class="tela_cadastro_formulario_campo" name="rg_cad" type="text" size="8" maxlength="8" placeholder="Somente Números" />
          	</p>

          	<p> 
           		<label for="birth_cad">Informe sua data de nascimento*</label>
            	<input class="tela_cadastro_formulario_campo_data" name="birth_cad" required="required" type="date" placeholder="dd/mm/aaaa" />
          	</p>

          	<p> 
            	<label for="sex_cad">Sexo*</label>
            	
            		<input value="msex_cad" name="msex_cad" type="radio"/> Masculino
            		<input value="fsex_cad" name="fsex_cad" type="radio"/> Feminino
            		<input value="osex_cad" name="osex_cad" type="radio"/> Prefiro não informar

             	
          	</p>

            <button type="submit" value="Avançar">Avançar</button>

            
        </form>

        <div class="cadastro_enviar">
			<h2>Já tem conta?</h2>
            <a href="login.php"> Ir para Login </a>
        </div>
	</div>
        
    </div>
    </div>

		<?php include "rodape.php"; ?>
	
</body>
</html>

