<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>Cadastro: lojONa</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="interface">
		<?php include "cabecalho.php"; ?>
	<div class="tela_cadastro">
		
		<h1>Cadastro de Usuário</h1>
	<div class="tela_cadastro_formulario">
		<form method="post" action="#"> 
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
            	
            		<input value="msex_cad" name="masculino" required="required" type="radio"/> Masculino
            		<input value="fsex_cad" name="feminino" required="required" type="radio"/> Feminino
            		<input value="osex_cad" name="outros" required="required" type="radio"/> Prefiro não informar
            	
          	</p>

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
            <a href="login.php"> Ir para Login </a>
        </div>
	</div>
        
    </div>
    </div>

		<?php include "rodape.php"; ?>
	
</body>
</html>