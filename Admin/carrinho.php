<?php
require __DIR__ . './Includes/header.php';
require __DIR__ . '../vendor/autoload.php';

use \App\Entity\Pedido;
use \App\Entity\Produto;

$obProdutos = new Produto;
$obPedidos = new Pedido;
$pedidos = Pedido::getPedidos();
// $titulo = 'SELECT COUNT(\*) FROM pedido ORDER BY DESC LIMIT 1';
// $result = mysql_query($titulo);
// $registro = mysql_fetch_assoc($result);

// este array foi obtido a partir seleção feita no banco de dados
$saldo = array($value['valor']);

// vamos usar o array_sum para fazer a soma
$subtotal = array_sum($saldo);
$frete = $value['valor_tele_entrega'];
$taxa = 'R$' + 5.00;
$total = $subtotal + $frete + $taxa;
?>

<!-- products cart -->
<div class="container mx-auto mt-10">
  <div class="flex shadow-md my-10">
    <div class="w-3/4 bg-white px-10 py-10">
      <div class="flex justify-between border-b pb-8">
        <h1 class="font-semibold text-2xl">Carrinho</h1>
        <h2 class="font-semibold text-2xl"><?php echo $obPedidos->id; ?>Items</h2>
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
              <span class="font-bold text-sm"><?php echo $obProdutos->nome; ?></span>
              <span class="text-red-500 text-xs"><?php echo $obCategorias->nome; ?></span>
              <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remover</a>
            </div>
          </div>
          <div class="flex justify-center w-1/5">
            <input class="mx-2 border text-center w-8" type="number" id="quantity" name="quantity" min="1" max="<?php echo $obProdutos->quantidade; ?>" value="<?php echo $value['quantidade']; ?>">
          </div>
          <span class="text-center w-1/5 font-semibold text-sm"><?php echo $obProdutos->preco; ?></span>
          <span class="text-center w-1/5 font-semibold text-sm"><?php echo $value['valor']; ?></span>
        </div>
    </div>
  <?php } ?>
  <a href="#" class="flex font-semibold text-indigo-600 text-sm mt-10">

    <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
      <path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
    </svg>
    Continue comprando
  </a>
  <div id="summary" class="w-1/4 px-8 py-10">
    <h1 class="font-semibold text-2xl border-b pb-8">Resumo</h1>
    <div class="flex justify-between mt-10 mb-5">
      <span class="font-semibold text-sm uppercase">Subtotal</span>
      <span class="font-semibold text-sm"><?php echo $subtotal; ?></span>
    </div>
    <div>
      <div class="flex justify-between mt-10 mb-5">
        <span class="font-semibold text-sm uppercase">Frete</span>
        <span class="font-semibold text-sm"><?php echo $frete ?></span>
      </div>
      <div class="flex justify-between mt-10 mb-5">
        <span class="font-semibold text-sm uppercase">Taxa</span>
        <span class="font-semibold text-sm"><?php echo $taxa; ?></span>
      </div>
      <div class="py-10">
        <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Código de Promoção</label>
        <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full">
      </div>
      <button class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">Aplicar</button>
      <div class="border-t mt-8">
        <div class="flex font-semibold justify-between py-6 text-sm uppercase">
          <span>Total</span>
          <span><?php echo $total; ?></span>
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