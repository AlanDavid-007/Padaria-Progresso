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
            <?php echo $value['quantidade'] ;?>
            </span>
          </div>
          <span class="text-center w-1/5 font-semibold text-sm"><?php echo $value['produto_id']->preco . ',' . 0 . 0; ?></span>
          <span class="text-center w-1/5 font-semibold text-sm"><?php echo $value['valor'] . ',' . 0 . 0;?></span>
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
        <span class="font-semibold text-sm"><?php echo 'R$' . $subtotal . ',' . 0 . 0 ; ?></span>
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
          <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Comprar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
require __DIR__ . './Includes/footer.php';
?>
