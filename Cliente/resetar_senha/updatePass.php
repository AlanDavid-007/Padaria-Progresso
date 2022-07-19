<?php
require __DIR__ . '../../../Admin/vendor/autoload.php';
use \App\Entity\Usuario;
session_start();
$obUsuarios = new Usuario;
//Validação do ID
if (!isset($_GET['id'])) {
    header('location: configuracoes.php?status=error');
    exit;
}
//Consulta Vaga
$obUsuarios = $obUsuarios::getUsuario($_GET['id']);
// echo "<pre>"; print_r($obCurso); echo "<pre>"; exit;


//Validação da Vaga
if (!$obUsuarios instanceof Usuario) {
    header('location: configuracoes.php?status=error');
    exit;
}
//  echo "<pre>"; print_r($_SESSION['email']); echo "<pre>"; exit;

if(isset($_POST['senha'])
{
  $obUsuarios->senha = $_POST['senha'];
  $obUsuarios->atualizar();
  header('location: ../../loginCliente.php');
    exit;
}
 require __DIR__ . '../sendLink.php';
?>
