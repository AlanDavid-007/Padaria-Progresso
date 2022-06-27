<?php
require __DIR__ . '../../vendor/autoload.php';

use \App\Entity\Usuario;

$obUsuarios = new Usuario;
$usuarios = $obUsuarios::getUsuarios();

/Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../configuracoes.php?status=error');
    exit;
}

//Consulta Vaga
$obUsuarios = $obUsuarios::getUsuario($_GET['id']);
// echo "<pre>"; print_r($obCurso); echo "<pre>"; exit;

//Validação da Vaga
if (!$obUsuarios instanceof $obUsuarios) {
    header('location: ../configuracoes.php?status=error');
    exit;
}

foreach ($usuarios as $key => $value) { 
if (isset($_POST['primeiro_nome'], $_POST['ultimo_nome'], $_POST['senha'], $_POST['cidade'], $_POST['telefone'] $_POST['endereco'], $_POST['email'],
         $_POST['cpf'],)) { 
    $obUsuarios->primeiro_nome = $_POST['primeiro_nome'];
    $obUsuarios->ultimo_nome = $_POST['ultimo_nome'];
    $obUsuarios->senha = $value['senha'];
    $obUsuarios->cidade = $_POST['cidade'];
    $obUsuarios->telefone = $_POST['telefone'];
    $obUsuarios->endereco = $_POST['endereco'];
    $obUsuarios->email = $_POST['email'];
    $obUsuarios->cpf = $_POST['cpf'];
    $obUsuarios->atualizar();
    //   echo "<pre>"; print_r($value['preco']); echo "</pre>"; exit; 
    // echo "<pre>"; print_r($value['nome']); echo "</pre>"; exit; 

    header('location: ../configuracoes.php');
    exit;
} 
}
 

require __DIR__ . '../configuracoes.php';
?>
