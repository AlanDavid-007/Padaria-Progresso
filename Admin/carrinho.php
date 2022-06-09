<?php
require __DIR__ . './Includes/header.php';
require __DIR__ . '../vendor/autoload.php'; 
use \App\Entity\Pedido;
use \App\Entity\Produto;
$obProdutos = new Produto;
$pedidos = Pedido::getPedidos();
// $titulo = 'SELECT COUNT(\*) FROM pedido ORDER BY DESC LIMIT 1';
// $result = mysql_query($titulo);
// $registro = mysql_fetch_assoc($result);
?>

<!-- products cart -->
<?php foreach ($pedidos as $key => $value) { ?>
<div class="container mx-auto mt-10 ">
    <div class="flex shadow-md my-10">
      <div class="w-3/4 bg-white px-10 py-10">
        <div class="flex justify-between border-b pb-8">
          <h1 class="font-semibold text-2xl">Carrinho</h1>
          <h2 class="font-semibold text-2xl"><?php echo $value['id'];?>Items</h2>
        </div>
        <div class="flex mt-10 mb-5">
          <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Detalhes do produto</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Quantidade</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Preço</h3>
          <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
        </div>
          <form method="post">
        <div class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
          <div class="flex w-2/5"> <!-- product -->
            <div class="w-20">
              <img class="h-24" src="./Assets/risoles.png" alt="">
            </div>
            <div class="flex flex-col justify-between ml-4 flex-grow">
              <span class="font-bold text-sm"><?php echo $obProdutos->nome;?></span>
              <span class="text-red-500 text-xs">Padaria Progresso</span>
              <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remover</a>
            </div>
          </div>
            
            
          <div class="flex justify-center w-1/5">
            <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
            </svg>
            <input class="rounded border appearance-none border-gray-400 py-2 focus:outline-none focus:border-red-500 text-base pl-3 pr-10" type="number" id="quantity" name="quantity" min="1" max="<?php echo $obProdutos->quantidade;?>" value="<?php echo $value['quantidade'];?>">
              </form>
            <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
              <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
            </svg>
          </div>
          <span class="text-center w-1/5 font-semibold text-sm"><?php echo $obProdutos->preco;?></span>
          <span class="text-center w-1/5 font-semibold text-sm"><?php echo $value['valor'];?></span>
        </div>
    </div>
  </div>
</div>
<?php
// este array foi obtido a partir seleção feita no banco de dados
   $saldo = array($value['valor']);

   // vamos usar o array_sum para fazer a soma
   $subtotal = array_sum($saldo);
   $frete = $value['valor_tele_entrega'];
   $taxa = 'R$' + 5.00;
   $total = $total + $frete + $taxa;                                  

?>
 <div class="lg:w-96 md:w-8/12 w-full bg-gray-100 dark:bg-gray-900 h-full">
                          <div class="flex flex-col lg:h-screen h-auto lg:px-8 md:px-7 px-4 lg:py-20 md:py-10 py-6 justify-between overflow-y-auto">
                              <div>
                                  <p class="lg:text-4xl text-3xl font-black leading-9 text-gray-800 dark:text-white">Summary</p>
                                  <div class="flex items-center justify-between pt-16">
                                      <p class="text-base leading-none text-gray-800 dark:text-white">Subtotal</p>
                                      <p class="text-base leading-none text-gray-800 dark:text-white"><?php echo $subtotal;?></p>
                                  </div>
                                  <div class="flex items-center justify-between pt-5">
                                      <p class="text-base leading-none text-gray-800 dark:text-white">Frete</p>
                                      <p class="text-base leading-none text-gray-800 dark:text-white"><?php echo $frete?></p>
                                  </div>
                                  <div class="flex items-center justify-between pt-5">
                                      <p class="text-base leading-none text-gray-800 dark:text-white">Taxa</p>
                                      <p class="text-base leading-none text-gray-800 dark:text-white"><?php echo $taxa;?></p>
                                  </div>
                              </div>
                              <div>
                                  <div class="flex items-center pb-6 justify-between lg:pt-5 pt-20">
                                      <p class="text-2xl leading-normal text-gray-800 dark:text-white">Total</p>
                                      <p class="text-2xl font-bold leading-normal text-right text-gray-800 dark:text-white"><?php echo $total;?></p>
                                  </div>
                                    <!-- Enviar para whatsapp levando foto, nome do produto etc...-->
                                  <button type="submit" onclick="checkoutHandler1(true)" class="text-base leading-none w-full py-5 bg-gray-800 border-gray-800 border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 text-white dark:hover:bg-gray-700">Pagar</button>
                              </div>
                              <form>
                          </div>
                      </div>
<?php } ?>
<?php
  require __DIR__ . './Includes/footer.php';
  ?> 
              <style>
                  /* width */
                  #scroll::-webkit-scrollbar {
                      width: 1px;
                  }
        
                  /* Track */
                  #scroll::-webkit-scrollbar-track {
                      background: #f1f1f1;
                  }
        
                  /* Handle */
                  #scroll::-webkit-scrollbar-thumb {
                      background: rgb(133, 132, 132);
                  }
              </style>
          </div>
          <script>
              let checkout = document.getElementById("checkout");
              let checdiv = document.getElementById("chec-div");
              let flag3 = false;
              const checkoutHandler = () => {
                  if (!flag3) {
                      checkout.classList.add("translate-x-full");
                      checkout.classList.remove("translate-x-0");
                      setTimeout(function () {
                          checdiv.classList.add("hidden");
                      }, 1000);
                      flag3 = true;
                  } else {
                      setTimeout(function () {
                          checkout.classList.remove("translate-x-full");
                          checkout.classList.add("translate-x-0");
                      }, 1000);
                      checdiv.classList.remove("hidden");
                      flag3 = false;
                  }
              };
          </script>
