<?php
require __DIR__ . '../Admin/vendor/autoload.php';

use \App\Entity\Usuario;

$obUsuarios = new Usuario;
if (isset(
    $_POST['primeiro_nome'],
    $_POST['ultimo_nome'],
    $_POST['senha'],
    $_POST['cidade'],
    $_POST['telefone'],
    $_POST['endereco'],
    $_POST['email'],
    $_POST['cpf']
)) {
    session_start();
    $_SESSION['email'] = $_POST['email'];;
    $_SESSION['senha'] = $_POST['senha'];;
    $_SESSION['primeiro_nome'] = $_POST['primeiro_nome'];
    $obUsuarios->primeiro_nome = $_POST['primeiro_nome'];
    $obUsuarios->ultimo_nome = $_POST['ultimo_nome'];
    $obUsuarios->senha = $_POST['senha'];
    $obUsuarios->cidade = $_POST['cidade'];
    $obUsuarios->telefone = $_POST['telefone'];
    $obUsuarios->endereco = $_POST['endereco'];
    $obUsuarios->email = $_POST['email'];
    $obUsuarios->cpf = $_POST['cpf'];
    // echo "<pre>"; print_r($obUsuarios->atualizar()['primeiro_nome']); echo "</pre>"; exit; 
    $obUsuarios->cadastrar();
    //   echo "<pre>"; print_r($value['preco']); echo "</pre>"; exit; 
    // echo "<pre>"; print_r($value['nome']); echo "</pre>"; exit; 

    header("Location: ../Padaria-Progresso/Cliente/index.php");
    exit;
}



require __DIR__ . '../Cadastro.php';
