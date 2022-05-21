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
if (isset($_POST['descricao'], $_POST['valor'], $_POST['data'], $_POST['valor_tele_entrega'], $_POST['pagamento_id'], $_POST['usuario_id'], $_POST['cliente_id'])) {

    $obPedido->descricao = $_POST['descricao'];
    $obPedido->valor = $_POST['valor'];
    $obPedido->data = $_POST['data'];
    $obPedido->valor_tele_entrega = $_POST['valor_tele_entrega'];
    $obPedido->pagamento_id = $_POST['pagamento_id'];
    $obPedido->usuario_id = $_POST['usuario_id'];
    $obPedido->cliente_id = $_POST['cliente_id'];
    $obPedido->cadastrar();
    // echo "<pre>"; print_r($obProduto); echo "</pre>"; exit; 

    header('location: ../produtos/categorias.php?status=success');
    exit;
}

require __DIR__ . './Includes/formulario_pedidos.php';
