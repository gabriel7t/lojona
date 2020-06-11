<?php
    session_start();
    require_once('conexao.php');

    //adiciona parcela quando já tem cartão cadastrado
    $cod_usuario = $_SESSION['usuario'];
    $parcela = $_POST['parcela'];
    $cod_compra = $_SESSION['compra'];
    
    $addvenda = "UPDATE compra SET parcelas = '$parcela' WHERE codigo = '$cod_compra'";
    $conexao->query($addvenda) or die ("Erro na operação 1");

    //apaga os itens do carrinho para realizar uma nova compra
    $delcart = "DELETE FROM carrinho WHERE codigo_cliente = '$cod_usuario'";
    $conexao->query($delcart) or die ("Erro na operação 3");
    unset( $_SESSION['codigo'] );

    header('Location: ../pedido_realizado.php');


?>