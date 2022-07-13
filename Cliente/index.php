<?php 
// echo $_SESSION['email'];
require __DIR__ . '../../Admin/vendor/autoload.php';

require __DIR__ . './Includes/header.php';


use \App\Entity\Categoria;

$categorias = Categoria::getCategorias();

?>
<!-- bg hero -->
<div class="dark:bg-gray-900">
    
    
    <div class="carro">
    
    
    <!-- <div class="dark:bg-gray-900 mx-auto" style="width: 50%;" > -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
    
            <ol class="carousel-indicators" >
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
    <div class="carousel-inner mx-auto" >
        <div class="carousel-item active">
            <img class="d-block w-100 h-80" id="photo1"  src="../Cliente/Assets/img3.jpg"  alt="First slide" >
        </div>
     <div class="carousel-item">
            <img class="d-block w-100 h-80" id="photo2" src="../Cliente/Assets/img1.jpg" alt="Second slide">
     </div>
     <div class="carousel-item">
            <img class="d-block w-100 h-80" id="photo3" src="../Cliente/Assets/img2.jpg" alt="Third slide">
     </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
    </a>
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