<?php
require __DIR__ . './Includes/header.php';
require __DIR__ . '../vendor/autoload.php'; 
use \App\Entity\Pedido;
$pedidos = Pedido::getPedidos();
$Counter = 'SQL COUNT(id) FROM pedido ORDER BY DESC LIMIT 1';
?>

<!-- products cart -->
<?php foreach ($pedidos as $key => $value) { ?>
<div class="container mx-auto mt-10 ">
    <div class="flex shadow-md my-10">
      <div class="w-3/4 bg-white px-10 py-10">
        <div class="flex justify-between border-b pb-8">
          <h1 class="font-semibold text-2xl">Carrinho</h1>
          <h2 class="font-semibold text-2xl"><?php echo $Counter;?>Items</h2>
        </div>
        <div class="flex mt-10 mb-5">
          <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Detalhes do produto</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Quantidade</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Preço</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
        </div>
        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
          <div class="flex w-2/5"> <!-- product -->
            <div class="w-20">
              <img class="h-24" src="./Assets/risoles.png" alt="">
            </div>
            <div class="flex flex-col justify-between ml-4 flex-grow">
              <span class="font-bold text-sm"><?php echo $value['nome']->nome;?></span>
              <span class="text-red-500 text-xs">Padaria Progresso</span>
              <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remover</a>
            </div>
          </div>
            
            <?php 
             $quantidade = $_POST['quantity'];
             $valor = '';
             $preco = $value['valor']->valor;
          if($quantidade >= 1)){
              $valor = 'R$' + $quantidade*$preco + ',' + 00;
          } else {
              $valor = 'Produto temporariamente indisponível';   
          }
          ?>
            
          <div class="flex justify-center w-1/5">
            <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
            </svg>

            <input class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10" type="number" id="quantity" name="quantity" value="<?php echo $value['quantidade'];?>">
              </input>

            <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
              <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
            </svg>
          </div>
          <span class="text-center w-1/5 font-semibold text-sm"><?php echo $preco;?></span>
          <span class="text-center w-1/5 font-semibold text-sm"><?php echo $valor;?></span>
        </div>
    </div>
  </div>
<?php } ?>
<?php
  require __DIR__ . './Includes/footer.php';
  ?>
