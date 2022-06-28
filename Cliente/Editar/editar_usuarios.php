<?php
require __DIR__ . '../../vendor/autoload.php';
ob_start();
use \App\Entity\Usuario;

$obUsuarios = new Usuario;
$usuarios = $obUsuarios::getUsuarios();

$obUsuarios->id = $_POST['id'];
//Validação do ID
if (!isset($_POST['id'])  || !is_numeric($_POST['id'])) {
    header('location: ../configuracoes.php?status=error');
    exit;
}

//Consulta Vaga
$obUsuario = $obUsuarios::getUsuario($_POST['id']);
echo "<pre>"; print_r($obUsuario); echo "<pre>"; exit;

//Validação da Vaga
if (!$obUsuario instanceof $obUsuarios) {
    header('location: ../configuracoes.php?status=error');
    exit;
}

if (isset($_POST['primeiro_nome'], $_POST['ultimo_nome'], $_POST['senha'], $_POST['cidade'], $_POST['telefone'], $_POST['endereco'], $_POST['email'],
         $_POST['cpf'])) { 
    $obUsuarios->primeiro_nome = $_POST['primeiro_nome'];
    $obUsuarios->ultimo_nome = $_POST['ultimo_nome'];
    $obUsuarios->senha = $_POST['senha'];
    $obUsuarios->cidade = $_POST['cidade'];
    $obUsuarios->telefone = $_POST['telefone'];
    $obUsuarios->endereco = $_POST['endereco'];
    $obUsuarios->email = $_POST['email'];
    $obUsuarios->cpf = $_POST['cpf'];
    $obUsuarios->atualizar();
    //   echo "<pre>"; print_r($value['preco']); echo "</pre>"; exit; 
    // echo "<pre>"; print_r($value['nome']); echo "</pre>"; exit; 

    header('location: ../configuracoes.php?status=success');
    exit;
} 


require __DIR__ . '../../configuracoes.php';
?>
<?php ob_end_flush(); ?>
