<?php
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
      <img class="d-block w-100 h-80" id="photo1"  src="../Admin/Assets/photo1.jpg"  alt="First slide" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-80" id="photo2" src="../Admin/Assets/photo2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-80" id="photo3" src="../Admin/Assets/photo3.jpg" alt="Third slide">
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
    
    <div class="mx-auto container px-6 xl:px-0 py-12">
        <div class="flex-col">
            <div class="grid lg:grid-cols-2 gap-x-8 gap-y-8 ">
            <!-- <a href="produtos/risoles.php"> -->
            <a href="produtos/produtos.php?categoria=1&categoria_nome=risolis">
            
            <div
                    class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 sm:p-28 py-36 px-10 flex justify-center items-center">
                    <img class="group-hover:opacity-60 transition duration-500" src="./Assets/risoles.png"
                        alt="risoles" />
                    <div
                        class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
                        <div>
                            <p
                                class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 dark:text-white">
                                Risóles</p>
                        </div>
                        <div>
                            <p
                                class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-800 dark:text-white">
                            </p>
                        </div>
                    </div>
                    <div
                        class="group-hover:opacity-60 transition duration-500 absolute bottom-8 right-8 flex justify-start items-start flex-row space-x-2">
                        <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                        <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                    </div>
                    <div
                        class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg
                
                " alt="add">
                        </button>
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                            <img class="hidden dark:block"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg"
                                alt="view">
                        </button>
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                            <img class="hidden dark:block" src="
                https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
                        </button>
                    </div>
                </div>
</a>
<a href="produtos/doces.php">
                <div
                    class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 sm:p-28 py-36 px-10 flex justify-center items-center">
                    <img class="group-hover:opacity-60 transition duration-500" src="./Assets/doces.png" alt="doces" />
                    <div
                        class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
                        <div>
                            <p
                                class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 dark:text-white">
                                Doces</p>
                        </div>
                        <div>
                            <p
                                class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-800 dark:text-white">
                            </p>
                        </div>
                    </div>
                    <div
                        class="group-hover:opacity-60 transition duration-500 absolute bottom-8 right-8 flex justify-start items-start flex-row space-x-2">
                        <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                        <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                    </div>
                    <div
                        class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg
                
                " alt="add">
                        </button>
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                            <img class="hidden dark:block"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg"
                                alt="view">
                        </button>
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                            <img class="hidden dark:block" src="
                https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
                        </button>
                    </div>
                </div>
</a>
<a href="produtos/cucas.php">
                <div
                    class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 sm:p-28 py-36 px-10 flex justify-center items-center">
                    <img class="group-hover:opacity-60 transition duration-500" src="./Assets/cucas.png" alt="cucas" />
                    <div
                        class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
                        <div>
                            <p
                                class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 dark:text-white">
                                Cucas</p>
                        </div>
                        <div>
                            <p
                                class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-800 dark:text-white">
                            </p>
                        </div>
                    </div>
                    <div
                        class="group-hover:opacity-60 transition duration-500 absolute bottom-8 right-8 flex justify-start items-start flex-row space-x-2">
                        <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                        <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                    </div>
                    <div
                        class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg
                
                " alt="add">
                        </button>
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                            <img class="hidden dark:block"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg"
                                alt="view">
                        </button>
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                            <img class="hidden dark:block" src="
                https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
                        </button>
                    </div>
                </div>
</a>
<a href="produtos/bolos.php">
                <div
                    class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 sm:p-28 py-36 px-10 flex justify-center items-center">
                    <img class="group-hover:opacity-60 transition duration-500" src="./Assets/bolos.png" alt="bolos" />
                    <div
                        class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
                        <div>
                            <p
                                class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 dark:text-white">
                                Bolos</p>
                        </div>
                        <div>
                            <p
                                class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-800 dark:text-white">
                            </p>
                        </div>
                    </div>
                    <div
                        class="group-hover:opacity-60 transition duration-500 absolute bottom-8 right-8 flex justify-start items-start flex-row space-x-2">
                        <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                        <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                    </div>
                    <div
                        class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg
                
                " alt="add">
                        </button>
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                            <img class="hidden dark:block"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg"
                                alt="view">
                        </button>
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                            <img class="hidden dark:block" src="
                https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
                        </button>
                    </div>
                    <div class="absolute top-4 right-6">
                        <p class="text-base leading-4 pb-0.5 text-gray-600 dark:text-white border-b-2 border-gray-600">
                            New</p>
                    </div>
                </div>
</a>
<a href="produtos/paes.php">
                <div
                    class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 sm:p-28 py-36 px-10 flex justify-center items-center">
                    <img class="group-hover:opacity-60 transition duration-500" src="./Assets/pao.jpg" alt="paes" />
                    <div
                        class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
                        <div>
                            <p
                                class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 dark:text-white">
                                Pães</p>
                        </div>
                        <div>
                            <p
                                class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-800 dark:text-white">
                            </p>
                        </div>
                    </div>
                    <div
                        class="group-hover:opacity-60 transition duration-500 absolute bottom-8 right-8 flex justify-start items-start flex-row space-x-2">
                        <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                        <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                    </div>
                    <div
                        class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg
                
                " alt="add">
                        </button>
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                            <img class="hidden dark:block"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg"
                                alt="view">
                        </button>
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                            <img class="hidden dark:block" src="
                https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
                        </button>
                    </div>
                </div>
</a>
<a href="produtos/kit_festa.php">
                <div
                    class="group group-hover:bg-opacity-60 transition duration-500 relative bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 sm:p-28 py-36 px-10 flex justify-center items-center">
                    <img class="group-hover:opacity-60 transition duration-500" src="./Assets/kit_festa.png"
                        alt="kit_festa" />
                    <div
                        class="absolute sm:top-8 top-4 left-4 sm:left-8 flex justify-start items-start flex-col space-y-2">
                        <div>
                            <p
                                class="group-hover:opacity-60 transition duration-500 text-xl leading-5 text-gray-600 dark:text-white">
                                Kit Festa</p>
                        </div>
                        <div>
                            <p
                                class="group-hover:opacity-60 transition duration-500 text-xl font-semibold leading-5 text-gray-800 dark:text-white">
                            </p>
                        </div>
                    </div>
                    <div
                        class="group-hover:opacity-60 transition duration-500 absolute bottom-8 right-8 flex justify-start items-start flex-row space-x-2">
                        <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                        <button class="bg-white border rounded-full focus:bg-gray-800 border-gray-600 p-1.5"></button>
                    </div>
                    <div
                        class="flex flex-col bottom-8 left-8 space-y-4 absolute opacity-0 group-hover:opacity-100 transition duration-500">
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1.svg" alt="add">
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg1dark.svg
                
                " alt="add">
                        </button>
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2.svg" alt="view">
                            <img class="hidden dark:block"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg2dark.svg"
                                alt="view">
                        </button>
                        <button>
                            <img class="dark:hidden"
                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3.svg" alt="like">
                            <img class="hidden dark:block" src="
                https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg3dark.svg" alt="like" />
                        </button>
                    </div>
                </div>
            </div>
            <!-- <div class="flex justify-end items-end mt-12">
                <div class="flex flex-row items-center justify-center space-x-8">
                    <button
                        class="text-base leading-none text-gray-800 dark:text-white border-b-2 border-transparent focus:outline-none focus:border-gray-800">
                        <p>1</p>
                    </button>
                    <button
                        class="text-base leading-none text-gray-800 dark:text-white border-b-2 border-transparent focus:outline-none focus:border-gray-800">
                        <p>2</p>
                    </button>
                    <button
                        class="text-base leading-none text-gray-800 dark:text-white border-b-2 border-transparent focus:outline-none focus:border-gray-800">
                        <p>3</p>
                    </button>
                    <button class="flex justify-center items-center">
                        <img class="dark:hidden"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg4.svg" alt="next">
                        <img class="hidden dark:block"
                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/product-grid-2-svg4dark.svg" alt="next">
                    </button>
                </div>
            </div> -->
        </div>
    </div>







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