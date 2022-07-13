<?php 
// echo $_SESSION['email'];
require __DIR__ . '../../Admin/vendor/autoload.php';

require __DIR__ . './Includes/header.php';


use \App\Entity\Categoria;

$categorias = Categoria::getCategorias();

?>
<!-- bg hero -->
<div class="dark:bg-gray-900">
    <div class="container mx-auto my-auto pl-5 md:py-12 lg:py-24">
        <div class="relative mx-40">
            <img src="./Assets/hero.png" alt="header" role="img" />
            <div class="absolute z-10 top-0 left-0 ml-60 px-auto   flex flex-col sm:justify-start items-start">
                <img src="./Assets/logo.png" alt="logo" role="img" />
            </div>
        </div>
    </div>
</div>
<section>
    <div class="mx-auto container px-6 xl:px-0 py-12 ">
        <p class="uppercase text-center font-serif text-xl text-light">Confira os nossos produtos!</p>
    </div>
    <?php if (count($categorias) == 0) {  ?>
        <div class="alert alert-secondary mt-3 ml-5 mr-5">Nenhum Produto encontrado</div>
    <?php } else { ?>
        <section class="d-flex justify-content-around flex flex-wrap">
            <?php foreach ($categorias as $key => $value) { ?>
                <div class="card ml-4 mb-5 " style="width: 30rem;">
                    <img src="Assets/bolos.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value->nome; ?></h5>
                        <a href="<?php echo $value->link; ?>" class="btn btn-danger mt-3 d-flex justify-content-center">Ver Produtos</a>

                    </div>
                </div>


            <?php } ?>
        </section>
        </div>
        </div>
    <?php } ?>
</section>
<?php
require __DIR__ . './Includes/footer.php';

?>