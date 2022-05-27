<?php
//adaptar
require __DIR__ . '../../vendor/autoload.php';

define('TITLE', 'Cadastrar Categoria');
define('HREF2', '../index.php');
define('TEXT', 'Categoria');
use \App\Entity\Categoria;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../index.php?status=error');
    exit;
}

//Consulta Categoria
$obCategoria = Categoria::getCategoria($_GET['id']);
// echo "<pre>"; print_r($obCategoria); echo "<pre>"; exit;

//Validação da Categoria
if (!$obCategoria instanceof Categoria) {
    header('location: ../index.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['excluir'])) {

    $obCategoria->excluir();

    header('location: ../index.php?status=success');
    exit;
}


require __DIR__ . '../../Includes/header_pasta.php';
require __DIR__ . '../../ConfirmarExclusao/confirmarExclusao_categorias.php';
require __DIR__ . '../../Includes/footer_pasta.php';
