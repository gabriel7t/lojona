<?php
session_start();
include('valida_login_proc.php');
require_once('conexao.php');
    $cod_usuario = $_SESSION['usuario'];

    //procura o conteudo do carrinho
    $procuracart = "SELECT SUM(produtos.preco) AS total FROM carrinho 
    INNER JOIN produtos ON produtos.codigo = carrinho.codigo_produto WHERE codigo_cliente = '$cod_usuario'";
    $query1 = $conexao->query($procuracart) or die ("Erro na operação 1");
    while ($tab1 = $query1->fetch_array()) {
        $total = $tab1['total'];
    }
    //adiciona o carrinho na tabela compra
    $addvenda = "INSERT INTO compra (codigo_cliente, totalvalor) VALUES ('$cod_usuario', '$total')";
    $conexao->query($addvenda) or die ("Erro na operação 2");

    //verifica se o cliente já possui cartão cadastrado
    $vercard = "SELECT numero_cartao FROM cartao WHERE codigo_cliente = '$cod_usuario'";
    $query2 = $conexao->query($vercard) or die ("Erro na operação 3");
    while ($tab2 = $query2->fetch_array()) {
        $numcard = $tab2['numero_cartao'];
    }
    //verifica o codigo da compra em andamento
    $vercod = "SELECT codigo FROM compra WHERE codigo_cliente = '$cod_usuario'";
    $query3 = $conexao->query($vercod) or die ("Erro na operação 4");
    while ($tab3 = $query3->fetch_array()) {
        $cod_compra = $tab3['codigo'];
    }
    if($numcard == NULL OR $numcard == "0"){
        $_SESSION['compra'] = $cod_compra;
        header('Location: ../cartao-de-credito.php');
    }else{
        $_SESSION['compra'] = $cod_compra;
        header('Location: ../avanca_cartao.php');
    }

?>