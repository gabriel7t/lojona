<?php
    session_start();
    require_once('conexao.php');

    //remove os ítens do carrinho a partir do botão "Remover" nos detalhes de produto do carrinho
    $cod = $_GET['id'];
            $delitem = "DELETE FROM carrinho WHERE codigo_produto = '$cod'";
            $conexao->query($delitem) or die ("Erro na operação 1");

    header('Location: ../carrinho.php');


?>