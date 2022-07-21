<?php

require __DIR__ . '../../../Admin/vendor/autoload.php';

use \App\Entity\Produto;
//busca
$busca = filter_input(INPUT_GET, 'busca');

//Filtro status
$FiltroNome = filter_input(INPUT_GET, 'nome');


//condiçoes sql 
$condicoes = [
    strlen($busca) ? 'nome LIKE "%' . str_replace(' ', '%', $busca) . '%"' : null,
];

$condicoes = array_filter($condicoes);

//clausula where
$where = implode(' AND ', $condicoes);

$produtos = Produto::getProdutos($where);
//  echo "<pre>"; print_r($produtos); echo "</pre>"; exit;
require __DIR__ . '../../Includes/header_pasta.php';
?>
<section class="mt-5 ml-5">
    <form method="get">
        <div class="row alig-items-between">
            <div class="col text-light">
                <label>Filtrar Produtos</label>
                <input type="text" name="busca" class="form-control" value="<?= $busca ?>">
            </div>
            <div class="col d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>
</section>
<section>
    <div class="mx-auto container px-6 xl:px-0 py-12 ">
        <p class="uppercase text-center font-serif text-xl text-light">Confira os nossos Produtos!</p>
    </div>
    <?php if (count($produtos) == 0) {  ?>
        <div class="alert alert-secondary mt-3 ml-5 mr-5">Nenhum Produto encontrado</div>
    <?php } else { ?>
        <section class="d-flex justify-content-start flex flex-wrap">
            <?php foreach ($produtos as $key => $value) { ?>
                <div class="card ml-4 mb-5" style="width: 25rem;">
                    <img src="../Assets/bolos.png" style="height: 50vh;" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title"><?php echo $value['nome']; ?></h5>
                        <p class="card-text">Preço: R$<?php echo $value['preco']; ?>,00</p>
                        <a href="<?php echo $value['link']; ?>" class="btn btn-danger mt-3 d-flex justify-content-center">Ver Produto</a>
                    </div>
                </div>


            <?php } ?>
        </section>
        </div>
        </div>
    <?php } ?>
</section>

<?php
require __DIR__ . '../../Includes/footer_pasta.php';
?>