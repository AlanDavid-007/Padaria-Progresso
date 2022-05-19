<?php
require __DIR__ . '../../vendor/autoload.php';

use \App\Entity\Pedido;
use \App\Db\Pagamento;
use \App\Db\Usuario;
use \App\Db\Cliente;

$obPagamento = new Pagamento;
$obUsuario = new Usuario;
$obPedido = new Pedido;
$obCliente = new Cliente;
$listaPagamentos = $obPagamentos::getPagamentos();
$listaUsuarios = $obUsuario::getUsuarios();
$listaClientes = $obCliente::getClientes();
//   echo "<pre>"; print_r($arrayProfessor); echo "</pre>"; exit;
if (isset($_POST['nome'], $_POST['descricao'], $_POST['quantidade'], $_POST['tipo'], $_POST['pedido_id'], $_POST['promocoes_id'])) {

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
