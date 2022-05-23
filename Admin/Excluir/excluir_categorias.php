<?php
//adaptar
require __DIR__ . '../../vendor/autoload.php';

define('TITLE', 'Cadastrar Categoria');
define('HREF2', '../Index/index_categorias.php');
define('TEXT', 'Categoria');

use \App\Entity\Categoria;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../Index/index_categorias.php?status=error');
    exit;
}

//Consulta Categoria
$obCategoria = Categoria::getCategoria($_GET['id']);
// echo "<pre>"; print_r($obCategoria); echo "<pre>"; exit;

//Validação da Categoria
if (!$obCategoria instanceof Categoria) {
    header('location: ../Index/index_categorias.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['excluir'])) {

    $obCategoria->excluir();

    header('location: ../Index/index_categorias.php?status=success');
    exit;
}

require __DIR__ . '../../INCLUDES/header_editar.php';
require __DIR__ . '../../INCLUDES/confirmarExclusao_categorias.php';
require __DIR__ . '../../INCLUDES/footer.php';
