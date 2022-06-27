<?php
require __DIR__ . '../../vendor/autoload.php';

use \App\Entity\Cliente;
use \App\Entity\Usuario;

$obUsuarios = new Usuario;
$obClientes = new Cliente;
$usuarios = $obUsuarios::getUsuarios();

foreach ($usuarios as $key => $value) { 
if (isset($_POST['primeiro_nome'], $_POST['ultimo_nome'], $_POST['senha'], $_POST['cidade'], $_POST['telefone'] $_POST['endereco'], $_POST['email'],
         $_POST['cpf'],)) { 
    $obClientes->primeiro_nome = $_POST['primeiro_nome'];
    $obClientes->ultimo_nome = $_POST['ultimo_nome'];
    $obClientes->senha = $value['senha'];
    $obClientes->cidade = $_POST['cidade'];
    $obClientes->telefone = $_POST['telefone'];
    $obClientes->endereco = $_POST['endereco'];
    $obClientes->email = $_POST['email'];
    $obClientes->cpf = $_POST['cpf'];
    $obClientes->cadastrar();
    //   echo "<pre>"; print_r($value['preco']); echo "</pre>"; exit; 
    // echo "<pre>"; print_r($value['nome']); echo "</pre>"; exit; 

    header('location: ../configuracoes.php');
    exit;
} 
}
 

require __DIR__ . '../configuracoes.php';
?>
