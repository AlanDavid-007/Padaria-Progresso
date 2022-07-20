<?php
require __DIR__ . '../../../Admin/vendor/autoload.php';
require __DIR__ . '../../Includes/header_pasta.php';
use \App\Entity\Usuario;
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
$id = $_GET['id'];

//  echo "<pre>"; print_r($_SESSION['email']); echo "<pre>"; exit;
require __DIR__ . '../reset_pass.php';
$usuarios = $obUsuarios::getUsuarios();
$senha = @$_REQUEST['pass'];
$submit = @$_REQUEST['submit'];
$senha1 = array_column($usuarios, 'senha');
if ($submit) {
    if ($senha == '') {
        echo '<div class="alert alert-info mt-3 ml-5 mr-5">Preencha os campos!</div>';
    } else {
if(isset($_POST['pass']) && in_array($_POST['pass'], $senha1))
{
  header('location: ../resetar_senha/updatePass.php?id=' .  $id);
    exit;
} else  {
    echo '<div class="alert alert-danger mt-3 ml-5 mr-5">Senha inválida!</div>';
}
    }
}
 require __DIR__ . '../../Includes/footer_pasta.php';
