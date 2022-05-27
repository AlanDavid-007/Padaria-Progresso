<?php
require __DIR__ . '../vendor/autoload.php';
session_start();
?>
<?php
require __DIR__ . './Includes/header.php';

    session_start();
    
        if(!isset($_SESSION['login'])){

            if(isset($_POST['resposta']) ){
                $login = 'admin@gmail.com';
                $senha = 'admin';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $Senha == $SenhaForm){
                    //Login efetuado com sucesso!
                    $_SESSION['login'] = $login;
                    header('location: index.php');
                }else{
                    //Falha no login!
                    echo 'Dados invalidos.';
                }
            }

            include('login.php');
        }   else{
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('Location: index.php');
            }
            include('index.php');
        }

        echo '<h1> Bem-vindo '.$_session['login']. '</h1>';
    echo '<a href="?logout">Fazer logout!</a>'
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

    <div class="mx-auto container px-6 xl:px-0 py-12 ">
        <p class="uppercase text-center font-serif text-xl text-white ">Confira os nossos produtos!</p>
    </div>
    <hr>
    <div class="mx-auto container px-6 xl:px-0 py-12">
        <div class="flex flex-col">
            <div class="mt-10 grid lg:grid-cols-2 gap-x-8 gap-y-8 items-center">
            <a href="produtos/risoles.php"><div
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

<?php
require __DIR__ . './Includes/footer.php';
?>