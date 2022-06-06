  
<?php
require __DIR__ . '../../vendor/autoload.php';

// use \App\Entity\Cliente;
// use \App\Entity\Pagamento;
// use \App\Entity\Usuario;

use \App\Entity\Pedido;
use \App\Entity\Produto;

$obPedidos = new Pedido;
$obProdutos = new Produto;
$listaProdutos = $obProdutos::getProdutos();

// $obPagamentos = new Pagamento;
// $obUsuarios = new Usuario;
// $obClientes = new Cliente;
// $listaCliente = $obClientes::getClientes();
// $listaPagamento = $obPagamentos::getPagamentos();
// $listaUsuario = $obUsuarios::getUsuarios();

$obPedidos->quantidade = $_POST['quantity'];
$quantidade = $obPedidos->quantidade;
$preco = $obProdutos->preco;
$valor = $quantidade*$preco;
$obPedidos->valor = $valor;

if (isset($_POST['quantity']
// , $_POST['pagamento_id'], $_POST['usuario_id'], $_POST['Cliente_id']
) && $quantidade >= 1) {
  
    $obPedidos->quantidade = $_POST['quantity'];
    $quantidade = $obPedidos->quantidade;
    $preco = $obProdutos->preco;
    $valor = $quantidade*$preco;
    $obPedidos->valor = $valor;
   // $obPedidos->aprovapedido = $_POST['aprovapedido'];
    $obPedidos->data = isset($obPedidos->data) ? date('Y-m-d', strtotime($obPedidos->data)) : '';
    $obPedidos->nome = $obProdutos->nome;
    $obPedidos->descricao = $obProdutos->descricao;
   // $obPedidos->valor_tele_entrega = $_POST['valor_tele_entrega'];
    $obPedidos->quantidade = $_POST['quantity'];
   // $obPedidos->pagamento_id = $_POST['pagamento_id'];]
   // $obPedidos->usuario_id = $_POST['usuario_id'];
   // $obPedidos->cliente_id = $_POST['cliente_id'];
//    echo "<pre>"; print_r($valor); echo "</pre>"; exit;
    $obPedidos->cadastrar();
    //  echo "<pre>"; print_r($obProdutos); echo "</pre>"; exit; 

    header('location: ../carrinho.php');
    exit;
}
    

require __DIR__ . '../../produtos_detalhes/Detalhes.php';
?>
