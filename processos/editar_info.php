<?php
session_start();
require_once('conexao.php');

$codigo = $_SESSION['usuario'];
$nome_edt = $_POST['nome_edt'];
$email_edt = $_POST['email_edt'];
$senha_edt = $_POST['senha_edt'];
$cpf_edt = $_POST['cpf_edt'];
$rg_edt = $_POST['rg_edt'];
$birth_edt = $_POST['birth_edt'];

    //atualiza as informações do cliente a partir da página do usuário
    $edit1 = "UPDATE cliente SET nome='$nome_edt', email='$email_edt', senha=md5('$senha'), cpf='$cpf_edt',
    rg='$rg_edt', nascimento='$birth_edt' WHERE codigo = '$codigo'";

    $conexao->query($edit1) or die ("Usuário já cadastrado");

    $rua_edt = $_POST['rua_edt'];
    $bairro_edt = $_POST['bairro_edt'];
    $cep_edt = $_POST['cep_edt'];
    $num_edt = $_POST['num_edt'];
    $estado_edt = $_POST['estado_edt'];
    $cidade_edt = $_POST['cidade_edt'];

    $edit2 = "UPDATE endereco SET rua='$rua_edt', bairro='$bairro_edt', cep='$cep_edt',
    numero='$num_edt', uf='$estado_edt', cidade='$cidade_edt' WHERE codigo_cliente = '$codigo'";

    $conexao->query($edit2) or die ("Erro ao atualizar Cadastro!");

    header("Location: ../tela_usuario.php");
 