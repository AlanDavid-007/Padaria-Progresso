  
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
if (isset($_POST['valor']
// ,$_POST['aprovapedido']
, $_POST['data'], $_POST['nome'], $_POST['descricao'], $_POST['valor_tele_entrega'], $_POST['quantidade']
// , $_POST['pagamento_id'], $_POST['usuario_id'], $_POST['Cliente_id']
)) {

    $obProdutos->valor = $_POST['valor'];
   // $obProdutos->aprovapedido = $_POST['aprovapedido'];
    $obProdutos->data = $_POST['data'];
    $obProdutos->nome = $_POST['nome'];
    $obProdutos->descricao = $_POST['descricao'];
    $obProdutos->valor_tele_entrega = $_POST['valor_tele_entrega'];
    $obProdutos->quantidade = $_POST['quantidade'];
   // $obProdutos->pagamento_id = $_POST['pagamento_id'];]
   // $obProdutos->usuario_id = $_POST['usuario_id'];
   // $obProdutos->cliente_id = $_POST['cliente_id'];
    
    $obProdutos->cadastrar();
    //  echo "<pre>"; print_r($obProdutos); echo "</pre>"; exit; 

    header('location: ../carrinho.php?status=success');
    exit;
}
    

require __DIR__ . '../../Includes/header_pasta.php';
require __DIR__ . '../../produtos_detalhes/Detalhes.php';
require __DIR__ . '../../Includes/footer_pasta.php';
?>