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
<body>
  <!-- bg hero -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Tá com fome? Vem comprar!!!</h2>
          <p data-aos="fade-up" data-aos-delay="100">Escolha abaixo algum de nossos diversos produtos!!!</p>
          <form method="get" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" name="nome" class="form-control" placeholder="Digite algo..." value="<?= $busca ?>">
            <button type="submit" class="btn btn-danger text-light" style="background:#dc3545;">Buscar</button>
          </form>

        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="../Assets/hero5.png" style="width:50vh;" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->
  <section>
    <div class="mx-auto container px-6 xl:px-0 py-12 ">
    <div class="section-header">
          <span>Veja nossos produtos!</span>
          <h2>Veja nossos produtos!</h2>

        </div>
    </div>
    <?php if (count($produtos) == 0) {  ?>
        <div class="alert alert-secondary mt-3 ml-5 mr-5">Nenhum Produto encontrado</div>
    <?php } else { ?>
      <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">
      <div class="row gy-4">
        <?php foreach ($produtos as $key => $value) { ?>
              <div class="col-lg-4 col-md-6 categories mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                  <div class="card-img">
                    <img src="../Assets/bolos.png" class="img-fluid" alt="...">
                    </div>
                    <h3><?php echo $value['nome'];?></h3>
                        <p class="card-text">Preço: R$<?php echo $value['preco']; ?>,00</p>
                        <a href="<?php echo $value['link']; ?>" class="btn btn-danger text-light d-flex justify-content-center">Ver Produto</a>
                    </div>
                </div>


            <?php } ?>
            </div>
          </div>
        </section>
    <?php } ?>
</section>

<?php
require __DIR__ . '../../Includes/footer_pasta.php';
?>