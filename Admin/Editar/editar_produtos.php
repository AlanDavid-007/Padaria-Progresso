<?php
require __DIR__ . '../../vendor/autoload.php';

define('TITLE', 'Editar Produto');

use \App\Entity\Pedido;
use \App\Entity\Promocao;
use \App\Entity\Categoria;
use \App\Entity\Produto;

$obProdutos = new Produto;
$obCategorias = new Categoria;
$obPedidos = new Pedido;
$obPromocoes = new Promocao;

$listaCategoria = $obCategorias::getCategorias();
$listaPedido = $obPedidos::getPedidos();
$listaPromocao = $obPromocoes::getPromocoes();

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../produtos/categorias.php?status=error');
    exit;
}

//Consulta Vaga
$obProdutos = $obProdutos::getProduto($_GET['id']);
// echo "<pre>"; print_r($obCurso); echo "<pre>"; exit;

//Validação da Vaga
if (!$obProdutos instanceof $obProdutos) {
    header('location: ../produtos/categorias.php?status=error');
    exit;
}

//    echo "<pre>"; print_r($obProdutos); echo "</pre>"; exit;
if (isset($_POST['nome'], $_POST['descricao'], $_POST['quantidade'], $_POST['tipo'], $_POST['imagem'], $_POST['link'], $_POST['preco']
// , $_POST['pedido_id'], $_POST['promocoes_id']
)) {

    $obProdutos->nome = $_POST['nome'];
    $obProdutos->descricao = $_POST['descricao'];
    $obProdutos->quantidade = $_POST['quantidade'];
    $obProdutos->tipo = $_POST['tipo'];
    $obProdutos->imagem = $_POST['imagem'];
    $obProdutos->link = $_POST['link'];
    $obProdutos->preco = $_POST['preco'];
    // $obProdutos->pedido_id = $_POST['pedido_id'];
    // $obProdutos->promocoes_id = $_POST['promocoes_id'];
    $obProdutos->atualizar();
    //  echo "<pre>"; print_r($obProdutos); echo "</pre>"; exit; 

    header('location: ../produtos/categorias.php?status=success');
    exit;
}

require __DIR__ . '../../Includes/header_pasta.php';
require __DIR__ . '../../Includes/formulario_produtos.php';
require __DIR__ . '../../Includes/footer_pasta.php';
?>
