<?php
require __DIR__ . '../../../Admin/vendor/autoload.php';

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
foreach ($produtos as $key => $value) { 
if (isset($_POST['quantity']
// , $_POST['pagamento_id'], $_POST['usuario_id'], $_POST['Cliente_id']
)) { 
//   $today = getdate();
// print_r($today);
    $obPedidos->quantidade = isset($_POST['quantity']) ? $_POST['quantity'] : 1;
    $preco = isset($_POST['price']) ? $_POST['price'] : 1;
    $obPedidos->valor = $obPedidos->quantidade * $preco;
    $obPedidos->aprovapedido = 1;
    $obPedidos->data = 
//       isset($today) ? 
      date('Y-m-d H:i:s'
//            , strtotime('$today')
          );
    $obPedidos->valor_tele_entrega = 10;
    $obPedidos->categoria = isset($_POST['categoria']) ? $_POST['categoria'] : 1;
//     $obPedidos->nome = $value['nome'];
//     $obPedidos->preco = $value['preco'];
    $obPedidos->produto_id = isset($_POST['referencial']) ? $_POST['referencial'] : 1;
//     $obPedidos->categoria_id = $value['tipo']->id;
    $obPedidos->cadastrar();
    //   echo "<pre>"; print_r($value['preco']); echo "</pre>"; exit; 
    // echo "<pre>"; print_r($value['nome']); echo "</pre>"; exit; 

    header('location: ../carrinho.php');
    exit;
} 
}
$pedidos = Pedido::getPedidos();
//busca
$busca = filter_input(INPUT_GET, 'nome');
// $quantidade = filter_input(INPUT_GET, 'quantity');
//Filtro status
$FiltroNome = filter_input(INPUT_GET, 'nome');
// $FiltroQuantidade = filter_input(INPUT_GET, 'quantity');


//condiçoes sql 
$condicoes = [
  strlen($busca) ? 'nome LIKE "%' . str_replace(' ', '%', $busca) . '%"' : null,
  // strlen($quantidade) ? 'quantidade LIKE "%' . str_replace(' ', '%', $quantidade) . '%"' : null,
];

$condicoes = array_filter($condicoes);

//clausula where
$where = implode(' AND ', $condicoes);

$produtos = Produto::getProdutos($where);
//  echo "<pre>"; print_r($produtos); echo "</pre>"; exit;
require __DIR__ . '../../Includes/header_pasta.php';
?>
<?php foreach ($produtos as $key => $value) { ?>
  <section class="mb-5 ml-5 d-none">
    <form method="get">
      <div class="row alig-items-between">
        <div class="col text-light">
          <label>Filtrar Produtos</label>
          <input type="text" name="nome" class="form-control" value="<?= $busca ?>">
        </div>
        <div class="col d-flex align-items-end">
          <button type="submit" class="btn btn-primary">Filtrar</button>
        </div>
      </div>
    </form>
  </section>
  <section class="text-gray-700 body-font overflow-hidden bg-white">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex mb-3">
        <a href="../produtos/categorias.php"><button class="flex mr-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded">Voltar</button></a>
        </button>
      </div>
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded border border-gray-200" src="../Assets/cucas.png">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="text-sm title-font text-gray-500 tracking-widest">Padaria Progresso</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?php echo $value['nome']; ?></h1>
          <div class="flex mb-4">
            <span class="flex items-center">
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-red-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <span class="text-gray-600 ml-3"> 4 Reviews</span>
            </span>
            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200">
              <a class="text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
              </a>
              <a class="ml-2 text-gray-500">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
              </a>
            </span>
          </div>
          <p class="leading-relaxed"><?php echo $value['descricao']; ?></p>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
            <!-- <div class="flex">
            <span class="mr-3">Color</span>
            <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
            <button class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
            <button class="border-2 border-gray-300 ml-1 bg-red-500 rounded-full w-6 h-6 focus:outline-none"></button>
          </div> -->

            <?php
            $obPedidos->quantidade = isset($_POST['quantity']) ? $_POST['quantity'] : 1;
            $quantidade = $obPedidos->quantidade;
            $preco = $value['preco'];
            $valor = '';
            // $quantidade = 0;
            if ($quantidade > 0) {
              $preco = $quantidade * $preco;
              // echo "<pre>"; print_r($preco); echo "</pre>"; exit;
              $obPedidos->valor = $preco;
            } else {
              $valor = 'Produto temporariamente indisponível';
            }

            ?>

            <form method="post" class="">
              <div class="flex ml-6 items-center">
                <span class="mr-3">Quantidade</span>
                <div class="relative">
                  <input class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10 d-none" type="number" id="referencial" name="referencial" value="<?php echo $value['id']; ?>">
                  <input class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10 d-none" type="text" id="categoria" name="categoria" value="<?php echo $value['tipo']->nome; ?>">
                  <input class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10" type="number" id="quantity" name="quantity" min="1" max="<?php echo $value['quantidade']; ?>" value="<?php echo $quantidade; ?>">
                  <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                      <path d="M6 9l6 6 6-6"></path>
                    </svg>
                  </span>
                </div>
                <span class=" pl-3 text-gray-700"> Disponível: <?php echo $value['quantidade']; ?></span>
              </div>
          </div>
          <!-- colocar preço de frete em span e colocar outro span com a quantidade maxima -->
          <div class="flex">
            <input class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10 d-none" type="number" id="price" name="price" value="<?php echo $preco; ?>">
            <span id="price-total" class="title-font font-medium text-2xl text-gray-900" price="<?php echo $preco; ?>"><?php echo $quantidade > 0 ? 'R$ <span id="get-price">' . $preco . '</span>' : $valor; ?></span>
            <button class="flex ml-auto text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded" type="submit">Adicionar ao Carrinho</button>
            <!-- <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
              </svg>
            </button> -->
          </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php
require __DIR__ . '../../Includes/footer_pasta.php';
?>