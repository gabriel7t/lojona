<?php
session_start();
include('valida_login_proc.php');
require_once('conexao.php');

    $cod_produto = $_POST['codigo_pedido'];
    $cod_usuario = $_SESSION['usuario'];

    //recebe o conteudo da página de detalhes do produto para adicionar no carrinho
    $additem = "INSERT INTO carrinho (codigo_produto, codigo_cliente) VALUES ('$cod_produto', '$cod_usuario')";
    $conexao->query($additem) or die ("Erro na operação 1");

    header('Location: ../carrinho.php');

?>