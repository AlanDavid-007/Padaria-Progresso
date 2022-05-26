<?php
require __DIR__ . '../../vendor/autoload.php';

// use \App\Entity\Pedido;
// use \App\Entity\Promocao;
use \App\Entity\Categoria;
use \App\Entity\Produto;

$obProdutos = new Produto;
$obCategorias = new Categoria;
// $obPedidos = new Pedido;
// $obPromocoes = new Promocao;

$listaCategoria = $obCategorias::getCategorias();
// $listaPedido = $obPedidos::getPedidos();
// $listaPromocao = $obPromocoes::getPromocoes();

    // echo "<pre>"; print_r($obPedidos); echo "</pre>"; exit;
if (isset($_POST['nome'], $_POST['descricao'], $_POST['quantidade'], $_POST['tipo'], $_POST['imagem']
// , $_POST['pedido_id'], $_POST['promocoes_id']
)) {

    $obProdutos->nome = $_POST['nome'];
    $obProdutos->descricao = $_POST['descricao'];
    $obProdutos->quantidade = $_POST['quantidade'];
    $obProdutos->tipo = $_POST['tipo'];
    $obProdutos->imagem = $_POST['imagem'];
    // $obProdutos->pedido_id = $_POST['pedido_id'];
    // $obProdutos->promocoes_id = $_POST['promocoes_id'];
    $obProdutos->cadastrar();
    //  echo "<pre>"; print_r($obProdutos); echo "</pre>"; exit; 

    header('location: ../produtos/categorias.php?status=success');
    exit;
}

require __DIR__ . '../../Includes/formulario_produtos.php';

?>
