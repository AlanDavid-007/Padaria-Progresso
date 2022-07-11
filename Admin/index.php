<?php 
session_start();
// echo $_SESSION['email'];
require __DIR__ . '../vendor/autoload.php';

require __DIR__ . './Includes/header.php';


use \App\Entity\Categoria;

$categorias = Categoria::getCategorias();

?>
<!-- bg hero  -->
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
      <img class="d-block w-100 h-80" id="photo1"  src="../Admin/Assets/img3.jpg"  alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-80" id="photo2" src="../Admin/Assets/img1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-80" id="photo3" src="../Admin/Assets/img2.jpg" alt="Third slide">
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

<?php
$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success mt-3 ml-5 mr-5">Ação executada com sucesso!</div>';
            break;
        case 'error':
            $mensagem = '<div class="alert alert-danger mt-3 ml-5 mr-5">Ação não executada!</div>';
            break;
        default:
            # code...
            break;
    }
}
?>

<?php if ($mensagem != '') { ?>
    <section>
        <?php echo $mensagem; ?>
    </section>
<?php } ?>

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
                        <div class="links d-flex justify-content-end">
                            <a class="ml-1" href="../Editar/editar_produtos.php?id=<?php echo $value->id; ?>" style="margin-right:10px; margin-top: 3%;">
                                <button type="button" class="neon-bt3 "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" style="margin-left:43%;" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                    </svg>
                                    <span></span>

                                    <span></span>

                                    <span></span>

                                    <span></span>
                                </button>
                            </a>

                            <a class="ml-1" href="../Excluir/excluir_produtos.php?id=<?php echo $value->id; ?>" style="margin-right:10px; margin-top: 3%;">
                                <button type="button" class="neon-bt2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" style="margin-left:43%;" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg>

                                    <span></span>

                                    <span></span>

                                    <span></span>

                                    <span></span></button>
                            </a>
                        </div>
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