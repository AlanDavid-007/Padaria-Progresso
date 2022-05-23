<?php

$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success mt-3">Ação executada com sucesso!</div>';
            break;
        case 'error':
            $mensagem = '<div class="alert alert-danger mt-3">Ação não executada!</div>';
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
    <form method="get">
        <div class="row">
            <div class="col">
                <label>Filtrar Produtos</label>
                <input type="text" name="busca_categoria" class="form-control" value="<?= $busca ?>">
            </div>
            <div class="col d-flex align-items-end">
                <button type="submit" class="btn btn-primary">filtrar</button>
            </div>
        </div>
    </form>
</section>

<section>
    <?php if (count($produtos) == 0) { ?>
        <div class="alert alert-secondary mt-3">Nenhum Produto encontrado</div>
    <?php } else { ?>
        <?php foreach ($produtos as $key => $value) { ?>
            <div class="mx-auto container px-6 xl:px-0 py-12 ">
                <p class="uppercase text-center font-serif text-xl text-light">Confira os nossos bolos!</p>
            </div>
            <hr>
            <div class="mx-auto container px-6 xl:px-0 py-12">
                <div class="flex flex-col">
                    <div class="mt-10 grid lg:grid-cols-2 gap-x-8 gap-y-8 items-center">
                        <a href="../produtos_detalhes/bolos_detalhe.php">
                            <div class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 sm:p-28 py-36 px-10 flex justify-center items-center">
                                <img class="group-hover:opacity-60 transition duration-500" src="<?php echo $value['imagem']; ?>" alt="bolos" />
                                <div class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
                                    <div>
                                        <p class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 dark:text-white">
                                            <?php echo $value['nome']; ?></p>
                                    </div>
                                    <div>
                                        <p class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-800 dark:text-white">
                                        </p>
                                    </div>
                                </div>
                                <div class="group-hover:opacity-60 transition duration-500 absolute bottom-8 right-8 flex justify-start items-start flex-row space-x-2">
                                    <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                                    <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                                </div>
                                <div class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
                                    <button>
                                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                                        <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg
                
                " alt="add">
                                    </button>
                                    <button>
                                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                                        <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg" alt="view">
                                    </button>
                                    <button>
                                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                                        <img class="hidden dark:block" src="
                https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
                                    </button>
                                </div>
                            </div>
                        </a>

                    <?php } ?>
                <?php } ?>
</section>