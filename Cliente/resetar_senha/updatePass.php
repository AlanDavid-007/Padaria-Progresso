<?php
require __DIR__ . '../../../Admin/vendor/autoload.php';
use \App\Entity\Usuario;
session_start();

 echo "<pre>"; print_r($_SESSION['email']); echo "<pre>"; exit;

$obUsuarios = new Usuario;
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'])
{
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $obUsuarios->
}
?>