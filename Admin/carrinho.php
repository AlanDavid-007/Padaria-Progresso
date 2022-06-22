<?php
require __DIR__ . './Includes/header.php';
require __DIR__ . '../vendor/autoload.php';

use \App\Entity\Pedido;
use \App\Entity\Produto;
use \App\Entity\Categoria;

$obProdutos = new Produto;
$obPedidos = new Pedido;
$obCategorias = new Categoria;
$pedidos = Pedido::getPedidos();
$produtos = Produto::getProdutos();
$listaPedido = $obPedidos::getPedidos();
?>
<!-- <script>
  document.getElementById('sweetButton'),addEventListener('click', exibeMensagem) ;
function exibeMensagem() {
  Swal.fire({ title: 'Are you sure?', text: "You won't be able to revert this!", 
    icon: 'warning',
     showCancelButton: true,
      confirmButtonColor: '#3085d6',
       cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!' }).then((result) => { if (result.isConfirmed) { 
          Swal.fire( 'Deleted!', 'Your file has been deleted.', 'success' ) } })
                  }          </script> -->
<!-- products cart -->
<div class="container mx-auto mt-10">
  <div class="flex shadow-md my-10">
    <div class="w-3/4 bg-white px-10 py-10">
      <div class="flex justify-between border-b pb-8">
        <h1 class="font-semibold text-2xl">Carrinho</h1>
        <h2 class="font-semibold text-2xl"><?php echo count($pedidos); ?> Itens</h2>
      </div>
      <div class="flex mt-10 mb-5">
        <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Detalhes do produto</h3>
        <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Quantity</h3>
        <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
        <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
      </div>
      <?php foreach ($pedidos as $key => $value) { ?>
        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
          <div class="flex w-2/5">
            <!-- product -->
            <div class="w-20">
              <img class="h-24" src="./Assets/risoles.png" alt="">
            </div>
            <div class="flex flex-col justify-between ml-4 flex-grow">
              <span class="font-bold text-sm"><?php echo $value['produto_id']->nome; ?></span>
              <span class="text-red-500 text-xs"><?php echo $value['categoria']; ?></span>
              <a id="excluir" href="./Excluir/excluir_pedidos.php?id=<?php echo $value['id']; ?>" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remover</a>
            </div>
          </div>
          <div class="flex justify-center w-1/5">
            <span class="text-red-500 text-xs">
              <?php echo $value['quantidade']; ?>
            </span>
          </div>
          <span class="text-center w-1/5 font-semibold text-sm"><?php echo 'R$' . $value['produto_id']->preco . ',' . 0 . 0; ?></span>
          <span class="text-center w-1/5 font-semibold text-sm"><?php echo 'R$' . $value['valor'] . ',' . 0 . 0; ?></span>
        </div>
        <?php
        // link de resolução do arreio: https://www.php.net/manual/pt_BR/function.array-column.php
        //  $saldo = $pedidos[][1];
        $saldo = array_column($pedidos, 'valor');
        $subtotal = array_sum($saldo);
        $frete = 10;
        $taxa = 5;
        $total = $subtotal + $frete + $taxa;
        // echo "<pre>"; print_r($saldo); echo "</pre>"; exit; 
        ?>
      <?php } ?>


      <a href="../Admin/produtos/categorias.php" class="flex font-semibold text-indigo-600 text-sm mt-10">

        <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
          <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
        </svg>
        Continue comprando
      </a>
    </div>
    <div id="summary" class="w-1/4 px-8 py-10 bg-white">
      <h1 class="font-semibold text-2xl border-b pb-8">Resumo</h1>
      <div class="flex justify-between mt-10 mb-5">
        <span class="font-semibold text-sm uppercase">Subtotal</span>
        <span class="font-semibold text-sm"><?php echo 'R$' . $subtotal . ',' . 0 . 0; ?></span>
      </div>
      <div>
        <div class="flex justify-between mt-10 mb-5">
          <span class="font-semibold text-sm uppercase">Frete</span>
          <span class="font-semibold text-sm"><?php echo 'R$' . $frete . ',' . 0 . 0; ?></span>
        </div>
        <div class="flex justify-between mt-10 mb-5">
          <span class="font-semibold text-sm uppercase">Taxa</span>
          <span class="font-semibold text-sm"><?php echo 'R$' . $taxa . ',' . 0 . 0; ?></span>
        </div>
        <div class="py-10">
          <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Código de Promoção</label>
          <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full">
        </div>
        <button class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">Aplicar</button>
        <div class="border-t mt-8">
          <div class="flex font-semibold justify-between py-6 text-sm uppercase">
            <span>Total</span>
            <span><?php echo 'R$' . $total . ',' . 0 . 0; ?></span>
          </div>
          <a href="https://wa.me/555136324177">
            <button type="button" class="btn bg-black btn-success d-flex justify-content-center text-center w-100" style="height: 50px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp mt-2" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
              </svg>

            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
require __DIR__ . './Includes/footer.php';
?>