<?php
require __DIR__ . '../../vendor/autoload.php';

use \App\Entity\Pedido;
use \App\Entity\Pagamento;
use \App\Entity\Usuario;
use \App\Entity\Cliente;
use \App\Entity\Promocao;

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
if (isset($_POST['nome'], $_POST['descricao'], $_POST['desconto'], $_POST['dataInicio'], $_POST['dataTermino'], $_POST['pedido_id'], $_POST['pedido_pagamento_id'], $_POST['pedido_usuario_id'], $_POST['pedido_cliente_id'])) {

    $obPromocao->nome = $_POST['nome'];
    $obPromocao->descricao = $_POST['descricao'];
    $obPromocao->desconto = $_POST['desconto'];
    $obPromocao->dataInicio = $_POST['dataInicio'];
    $obPromocao->dataTermino = $_POST['dataTermino'];
    $obPromocao->pedido_id = $_POST['pedido_id'];
    $obPromocao->pedido_pagamento_id = $_POST['pedido_pagamento_id'];
    $obPromocao->pedido_usuario_id = $_POST['pedido_usuario_id'];
    $obPromocao->pedido_cliente_id = $_POST['pedido_cliente_id'];
    $obPromocao->cadastrar();
    // echo "<pre>"; print_r($obProduto); echo "</pre>"; exit; 

    header('location: ../Index/index_cursos.php?status=success');
    exit;
}

require __DIR__ . './Includes/formulario_produtos.php';
