  
<?php
require __DIR__ . '../../vendor/autoload.php';

// use \App\Entity\Cliente;
// use \App\Entity\Pagamento;
// use \App\Entity\Usuario;

use \App\Entity\Pedido;
use \App\Entity\Produto;
use \App\Entity\Categoria;

$obPedidos = new Pedido;
$obProdutos = new Produto;
$obCategorias = new Categoria;

$produtos = Produto::getProdutos();
 $listaProdutos = $obProdutos::getProdutos();
// $obPagamentos = new Pagamento;
// $obUsuarios = new Usuario;
// $obClientes = new Cliente;
 $listaCategorias = $obCategorias::getCategorias();
// $listaPagamento = $obPagamentos::getPagamentos();
// $listaUsuario = $obUsuarios::getUsuarios();
if (isset($_POST['quantity']
// , $_POST['pagamento_id'], $_POST['usuario_id'], $_POST['Cliente_id']
)) { 
//   $today = getdate();
// print_r($today);
    $obPedidos->quantidade = isset($_POST['quantity']) ? $_POST['quantity'] : 1;
    $preco = $obPedidos->quantidade * $value['preco'];
    $obPedidos->valor = $preco;
    $obPedidos->aprovapedido = 1;
    $obPedidos->data = 
//       isset($today) ? 
      date('Y-m-d H:i:s'
//            , strtotime('$today')
          );
    $obPedidos->valor_tele_entrega = 10;
    $obPedidos->categoria = $value['tipo']->nome;
    $obPedidos->nome = $value['nome'];
    $obPedidos->preco = $value['preco'];
    $obPedidos->produto_id = $value['id'];
    $obPedidos->categoria_id = $value['tipo']->id;
    $obPedidos->cadastrar();
    //   echo "<pre>"; print_r($value['preco']); echo "</pre>"; exit; 
    // echo "<pre>"; print_r($value['nome']); echo "</pre>"; exit; 

    header('location: ../carrinho.php');
    exit;
} 
 

require __DIR__ . '../../produtos_detalhes/Detalhes.php';
?>
