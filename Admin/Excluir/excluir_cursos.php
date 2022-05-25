<?php
//adaptar
require __DIR__ . '../../vendor/autoload.php';

use \App\Entity\Produto;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../../produtos/categorias.php?status=error');
    exit;
}

//Consulta Curso
$obProdutos = Produto::getProduto($_GET['id']);
// echo "<pre>"; print_r($obProdutos); echo "<pre>"; exit;

//Validação da Curso
if (!$obProdutos instanceof Produto) {
    header('location: ../../produtos/categorias.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['excluir'])) {

    $obProdutos->excluir();

    header('location: ../../produtos/categorias.php?status=success');
    exit;
}

require __DIR__ . '../../Includes/header_editar.php';
require __DIR__ . '../../Includes/confirmarExclusao_produtos.php';
require __DIR__ . '../../Includes/footer.php';
