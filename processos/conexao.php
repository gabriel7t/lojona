<?php
$server = "localhost";
$usuario = "root";
$senha = "";
$bdnome = "bd_lojona";

//estabelece uma conexao com o banco de dados
$conexao = new mysqli($server, $usuario, $senha, $bdnome) or die ("Erro na conexão ao banco de dados.");


?>