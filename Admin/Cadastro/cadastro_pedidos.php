  
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

    // echo "<pre>"; print_r($obPedidos); echo "</pre>"; exit;
if (isset($_POST['quantity']
// , $_POST['pagamento_id'], $_POST['usuario_id'], $_POST['Cliente_id']
)) {

//     $obPedidos->valor = $_POST['valor'];
//    // $obPedidos->aprovapedido = $_POST['aprovapedido'];
    // $obPedidos->data = $_POST['data'];
    // $obPedidos->nome = $_POST['nome'];
    // $obPedidos->descricao = $_POST['descricao'];
    // $obPedidos->valor_tele_entrega = $_POST['valor_tele_entrega'];
    $obPedidos->quantidade = $_POST['quantity'];
   // $obPedidos->pagamento_id = $_POST['pagamento_id'];]
   // $obPedidos->usuario_id = $_POST['usuario_id'];
   // $obPedidos->cliente_id = $_POST['cliente_id'];
    
    $obPedidos->cadastrar();
    //  echo "<pre>"; print_r($obProdutos); echo "</pre>"; exit; 

    header('location: ../carrinho.php');
    exit;
}
    

require __DIR__ . '../../Includes/header_pasta.php';
require __DIR__ . '../../produtos_detalhes/Detalhes.php';
require __DIR__ . '../../Includes/footer_pasta.php';
?>
