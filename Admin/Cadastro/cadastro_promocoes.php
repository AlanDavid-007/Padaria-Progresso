<?php
require __DIR__ . '../../vendor/autoload.php';

use \App\Entity\Promocao;
use \App\Db\Pagamento;
use \App\Db\Usuario;
use \App\Db\Cliente;
use \App\Db\Promocao;

$obPagamento = new Pagamento;
$obUsuario = new Usuario;
$obPedido = new Pedido;
$obCliente = new Cliente;
$obPromocao = new Promocao;
$listaPagamentos = $obPagamentos::getPagamentos();
$listaUsuarios = $obUsuario::getUsuarios();
$listaClientes = $obCliente::getClientes();
$listaPedidos = $obPedido::getPedidos();
//   echo "<pre>"; print_r($arrayProfessor); echo "</pre>"; exit;
if (isset($_POST['nome'], $_POST['descricao'], $_POST['desconto'], $_POST['dataInicio'], $_POST['dataTermino'], $_POST['pedido_id'], $_POST['pagamento_id'], $_POST['usuario_id'], $_POST['cliente_id'])) {

    $obPromocao->nome = $_POST['nome'];
    $obPromocao->descricao = $_POST['descricao'];
    $obPromocao->desconto = $_POST['desconto'];
    $obPromocao->dataInicio = $_POST['dataInicio'];
    $obPromocao->dataTermino = $_POST['dataTermino'];
    $obPromocao->pedido_id = $_POST['pedido_id'];
    $obPromocao->pagamento_id = $_POST['pagamento_id'];
    $obPromocao->usuario_id = $_POST['usuario_id'];
    $obPromocao->cliente_id = $_POST['cliente_id'];
    $obPromocao->cadastrar();
    // echo "<pre>"; print_r($obProduto); echo "</pre>"; exit; 

    header('location: ../Index/index_cursos.php?status=success');
    exit;
}

require __DIR__ . './Includes/formulario_produtos.php';
