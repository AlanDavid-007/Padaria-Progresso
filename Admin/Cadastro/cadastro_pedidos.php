  
<?php
require __DIR__ . '../../vendor/autoload.php';

// use \App\Entity\Cliente;
// use \App\Entity\Pagamento;
// use \App\Entity\Usuario;

use \App\Entity\Pedido;
use \App\Entity\Produto;
$obPedidos = new Pedido;
$obProdutos = new Produto;
$produtos = Produto::getProdutos();
// $listaProdutos = $obProdutos::getProdutos();
// $obPagamentos = new Pagamento;
// $obUsuarios = new Usuario;
// $obClientes = new Cliente;
// $listaCliente = $obClientes::getClientes();
// $listaPagamento = $obPagamentos::getPagamentos();
// $listaUsuario = $obUsuarios::getUsuarios();
if (isset($_POST['quantity']
// , $_POST['pagamento_id'], $_POST['usuario_id'], $_POST['Cliente_id']
)) { 
//   $today = getdate();
// print_r($today);
    $obPedidos->quantidade = isset($_POST['quantity']) ? $_POST['quantity'] : 1;
    $preco = $obPedidos->quantidade * $obProdutos->preco;
    $obPedidos->valor = $preco;
    $obPedidos->aprovapedido = 1;
    $obPedidos->data = 
//       isset($today) ? 
      date('Y-m-d H:i:s'
//            , strtotime('$today')
          );
  
//     $obPedidos->nome = 1;
    // $obPedidos->descricao = 1;
    $obPedidos->valor_tele_entrega = 10;
    $obPedidos->categoria = $obProdutos->tipo;
//     $obPedidos->pagamento_id = 1;
//     $obPedidos->usuario_id = 1;
//     $obPedidos->cliente_id = 1;
   // echo "<pre>"; print_r($valor); echo "</pre>"; exit;
//    echo "<pre>"; print_r($obPedidos->valor_tele_entrega); echo "</pre>"; exit; 
    $obPedidos->cadastrar();
     echo "<pre>"; print_r($obPedidos->categoria); echo "</pre>"; exit; 

    header('location: ../carrinho.php');
    exit;
} 

require __DIR__ . '../../produtos_detalhes/Detalhes.php';
?>
