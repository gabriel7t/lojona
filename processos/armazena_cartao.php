<?php
session_start();
include('valida_login_proc.php');
require_once('conexao.php');

    $cod_usuario = $_SESSION['usuario'];
    $cod_compra = $_SESSION['compra'];
    $num_card = $_POST['num_card'];
    $nome_card = $_POST['nome_card'];
    $val1_card = $_POST['val1_card'];
    $val2_card = $_POST['val2_card'];
    $ccv_card = $_POST['ccv_card'];
    $parcela = $_POST['quantidade'];
    
    //adiciona dados do cartão
		$sql1 = "INSERT INTO cartao (codigo_cliente, numero_cartao, nome_cartao, validade_m, validade_a, ccv) 
                          VALUES ('$cod_usuario','$num_card','$nome_card','$val1_card','$val2_card','$ccv_card' )";
    $conexao->query($sql1) or die ("Erro na operação 1");
    
    //adiciona a quantidade de parcelas
    $addvenda = "UPDATE compra SET parcelas = '$parcela' WHERE codigo = '$cod_compra'";
    $conexao->query($addvenda) or die ("Erro na operação 1");

    //apaga os itens do carrinho para realizar uma nova compra
    $delcart = "DELETE FROM carrinho WHERE codigo_cliente = '$cod_usuario'";
    $conexao->query($delcart) or die ("Erro na operação 3");
    unset( $_SESSION['codigo'] );

		header("Location: ../pedido_realizado.php");

?>