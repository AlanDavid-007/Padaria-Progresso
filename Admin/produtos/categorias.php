<?php

require __DIR__ . '../../vendor/autoload.php';

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
                    <div class="links d-flex justify-content-end">
                        <a class="ml-1  " href="../Editar/editar_produtos.php?id=<?php echo $value['id']; ?>" style="margin-right:10px; margin-top: 3%;">
                            <button type="button" class="neon-bt3 "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" style="margin-left:43%;" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                </svg>
                                <span></span>

                                <span></span>

                                <span></span>

                                <span></span>
                            </button>
                        </a>
                        <a class="ml-1 " href="../Excluir/excluir_produtos.php?id=<?php echo $value['id']; ?>" style="margin-right:10px; margin-top: 3%;">
                            <button type="button" class="neon-bt2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" style="margin-left:43%;" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                </svg>

                                <span></span>

                                <span></span>

                                <span></span>

                                <span></span></button>
                        </a>
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