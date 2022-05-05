<?php
require __DIR__ . '../../vendor/autoload.php';



use App\Entity\Produto;

$obProduto = new Produto;

//   echo "<pre>"; print_r($arrayProfessor); echo "</pre>"; exit;
if (isset($_POST['nome'], $_POST['descricao'],$_POST['quantidade'], $_POST['tipo'],$_POST['pedido_id'],$_POST['promocoes_id'],$_POST['data'], $_POST['status'])) {

    $obProduto->nome = $_POST['nome'];
    $obProduto->descricao = $_POST['descricao'];
    $obProduto->quantidade = $_POST['quantidade'];
    $obProduto->tipo = $_POST['tipo'];
    $obProduto->pedido_id = $_POST['pedido_id'];
    $obProduto->promocoes_id = $_POST['promocoes_id'];
    $obProduto->cadastrar();
    // echo "<pre>"; print_r($obProduto); echo "</pre>"; exit; 

    header('location: ../Index/index_cursos.php?status=success');
    exit;
}

require __DIR__ . './Includes/formulario_produtos.php';
