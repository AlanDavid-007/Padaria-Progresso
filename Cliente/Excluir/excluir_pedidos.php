<?php
//adaptar
require __DIR__ . '../../../Admin/vendor/autoload.php';
define ('HREF2','../carrinho.php');
define('TITLE', 'Excluir pedido');
define('TEXT', 'Pedido');
use \App\Entity\Pedido;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../carrinho.php');
    exit;
}

//Consulta Curso
$obPedidos = Pedido::getPedido($_GET['id']);
// echo "<pre>"; print_r($obProdutos); echo "<pre>"; exit;

//Validação da Curso
if (!$obPedidos instanceof Pedido) {
    header('location: ../carrinho.php');
    exit;
}
//Validação do POST
if (isset($_POST['excluir'])) {

    $obPedidos->excluir();

    header('location: ../carrinho.php');
    exit;
}


require __DIR__ . '../../Includes/header_pasta.php';
require __DIR__ . '../../ConfirmarExclusao/confirmarExclusao_pedidos.php';
require __DIR__ . '../../Includes/footer_pasta.php';
