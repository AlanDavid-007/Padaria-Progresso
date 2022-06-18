<?php
require __DIR__ . '../vendor/autoload.php';

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
    if((!empty($foto_usuario)) and (file_exists("imagens/$id/$foto_usuario"))){
    echo "<img src='../Assets/$imagem' width='150'><br>";
    echo "<a href='../Assets/$imagem' download>Download</a><br><br>";
    }else{
    echo "<img src='../Assets/$imagem' width='150'><br>";
    //echo "<a href='../Assets/$imagem'>Download</a>";
    }
<?php } ?>

<section>
    <div class="mx-auto container px-6 xl:px-0 py-12 ">
        <p class="uppercase text-center font-serif text-xl text-light">Confira os nossos produtos!</p>
    </div>
    <hr>
    <?php if (count($categorias) == 0) {  ?>
        <div class="alert alert-secondary mt-3 ml-5 mr-5">Nenhum Produto encontrado</div>
    <?php } else { ?>
        <div class="mx-auto container px-6 xl:px-0 py-8">
            <div class="grid grid-cols-3 gap-4">
                <?php foreach ($categorias as $key => $value) { ?>
                    <div class="mt-2 items-center">
                        <a href="<?php echo $value->link; ?>">
                            <div class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 sm:p-28 py-36 px-10 flex justify-center items-center col-span-2 mr-5">
                                <?php if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {
                                    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
                                    $nome = $_FILES['arquivo']['name'];


                                    // Pega a extensao
                                    $extensao = strrchr($nome, '.');

                                    // Converte a extensao para mimusculo
                                    $extensao = strtolower($extensao);

                                    // Somente imagens, .jpg;.jpeg;.gif;.png
                                    // Aqui eu enfilero as extesões permitidas e separo por ';'
                                    // Isso server apenas para eu poder pesquisar dentro desta String
                                    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
                                        // Cria um nome único para esta imagem
                                        // Evita que duplique as imagens no servidor.
                                        $novoNome = md5(microtime()) . '.' . $extensao;

                                        // Concatena a pasta com o nome
                                        $destino = 'Assets/' . $novoNome;

                                        // tenta mover o arquivo para o destino
                                        if (@move_uploaded_file($arquivo_tmp, $destino)) {
                                        }
                                ?>
                                        <img class="group-hover:opacity-60 transition duration-500" <?php "<img src=\"" . $destino . "\""; ?> />
                                        <div class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">

                                        <?php } ?>
                                    <?php } ?><div>
                                        <p class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 dark:text-white">
                                            <?php echo $value->nome; ?></p>
                                    </div>
                                    <div>
                                        <p class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-800 dark:text-white">
                                        </p>
                                    </div>
                                        </div>
                                        <div class="group-hover:opacity-60 transition duration-500 absolute bottom-8 right-8 flex justify-start items-start flex-row space-x-2">
                                            <a href="Editar/editar_categorias.php?id=<?php echo $value->id; ?>" style="margin-right:10px;">
                                                <button type="button" class="neon-bt3 "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" style="margin-left:43%;" viewBox="0 0 16 16">
                                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                    </svg>
                                                    <span></span>

                                                    <span></span>

                                                    <span></span>

                                                    <span></span>
                                                </button>
                                            </a>

                                            <a href="Excluir/excluir_categorias.php?id=<?php echo $value->id; ?>" style="margin-right:10px;">
                                                <button type="button" class="neon-bt2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" style="margin-left:43%;" viewBox="0 0 16 16">
                                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                    </svg>

                                                    <span></span>

                                                    <span></span>

                                                    <span></span>

                                                    <span></span></button>
                                            </a>

                                        </div>
                            </div>
                        </a>
                    </div>




                <?php } ?>
            </div>
        </div>
    <?php } ?>
</section>
<?php
require __DIR__ . './Includes/footer.php';
?>