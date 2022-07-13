<?php
require __DIR__ . '../../../Admin/vendor/autoload.php';
ob_start();
use \App\Entity\Usuario;
$obUsuarios = new Usuario;
$usuarios = $obUsuarios::getUsuarios();
//Validação do ID
if (!isset($_GET['email'])) {
    header('location: configuracoes.php?status=error');
    exit;
}


//Valemailação da Vaga
if (!$obUsuarios instanceof Usuario) {
    header('location: configuracoes.php?status=error');
    exit;
}

if (isset($_POST['primeiro_nome'], $_POST['ultimo_nome'], $_POST['senha'], $_POST['cidade'], 
$_POST['telefone'], $_POST['endereco'], $_POST['email'],
         $_POST['cpf'])) { 
    $obUsuarios->primeiro_nome = $_POST['primeiro_nome'];
    $obUsuarios->ultimo_nome = $_POST['ultimo_nome'];
    $obUsuarios->senha = $_POST['senha'];
    $obUsuarios->cidade = $_POST['cidade'];
    $obUsuarios->telefone = $_POST['telefone'];
    $obUsuarios->endereco = $_POST['endereco'];
    $obUsuarios->email = $_POST['email'];
    $obUsuarios->cpf = $_POST['cpf'];
    // echo "<pre>"; print_r($obUsuarios->atualizar()['primeiro_nome']); echo "</pre>"; exit; 
    $obUsuarios->atualizar();

    header('location: ../../../login.php');
    exit;
} 


require __DIR__ . '../../configuracoes.php';
?>
<?php ob_end_flush(); ?>
