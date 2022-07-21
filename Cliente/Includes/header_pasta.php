<?php ob_start();
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://use.fontawesome.com/ea21c98100.js"></script>
    <script src="https://kit.fontawesome.com/c1e1266368.js" crossorigin="anonymous"></script>
    <title>Padaria Progresso</title>
</head>

<body style="background-color: #7B7782;">
    <!-- navbar -->
    <div class="dark:bg-gray-900">
        <div>
            <div class="relative">
                <!-- For md screen size -->
                <div id="md-searchbar" class="bg-white dark:bg-gray-900 hidden lg:hidden py-5 px-6 items-center justify-between">
                    <div class="flex items-center space-x-3 text-gray-800 dark:text-white">
                        <div>
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg" alt="search">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg" alt="search">
                        </div>
                        <input type="text" placeholder="Search for products" class="text-sm leading-none dark:text-gray-300 dark:bg-gray-900 text-gray-600 focus:outline-none" />
                    </div>
                    <div class="space-x-6">
                        <button aria-label="go to cart" class="text-gray-800 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                            <img class="w-5 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg" alt="bag">
                            <img class="w-5 dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg" alt="bag">
                        </button>
                    </div>
                </div>
                <!-- For md screen size -->

                <!-- For large screens -->
                <div class="dark:bg-gray-800 bg-gray-50 px-6 py-9">
                    <div class="container mx-auto flex items-center justify-between">
                        <h1 class="md:w-2/12 cursor-pointer text-gray-800 dark:text-white" aria-label="the Crib.">
                            <a href="../index.php"><img class="dark:hidden" src="../Assets/logo.png" style="width: 150px;" alt="logo"></a>
                            <a href="../index.php"><img class="dark:block hidden" src="../Assets/logo.png" style="width: 150px;" alt="logo"></a>
                        </h1>
                        <ul class="hidden w-8/12 md:flex items-center justify-center space-x-6 font-serif">
                            <li>
                                <a href="../index.php" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800" style="text-decoration: none; font-size: 20px;">Início</a>
                            </li>
                            <li>
                                <a href="../sobre.php" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800" style="text-decoration: none; font-size: 20px;">Sobre Nós</a>
                            </li>
                            <li>
                                <a href="../acesso_config.php?primeiro_nome=<?php echo $_SESSION['primeiro_nome'];?>" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800" style="text-decoration: none; font-size: 20px;">
                                    Configurações
                                </a>
                            </li>
                            <li>
                                <a href="../produtos/categorias.php" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800" style="text-decoration: none; font-size: 20px;">Categoria</a>
                            </li>
                            <li>
                                <a href="../logout.php" class="dark:text-white text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800" style="text-decoration: none; font-size: 20px;">Logout</a>
                            </li>
                        </ul>

                       <div class="md:w-2/12 justify-end flex items-center space-x-4 xl:space-x-8">
                          <!--  <div class="hidden lg:flex items-center">
                                <button onclick="toggleSearch()" aria-label="search items" class="w-5 text-gray-800 dark:hover:text-gray-300 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                    <img class="transform rotate-90 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg" alt="search">
                                    <img class="transform rotate-90 dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg" alt="search">
                                </button>
                                <input id="searchInput" type="text" placeholder="search" class="hidden text-sm dark:bg-gray-900 dark:placeholder-gray-300 text-gray-600 rounded ml-1 border border-transparent focus:outline-none focus:border-gray-400 px-1" />
                            </div>-->
                            <div class="hidden lg:flex items-center space-x-4 xl:space-x-8">
                                <a href="../carrinho.php" aria-label="go to cart" class="w-6 text-gray-800 dark:hover:text-gray-300 dark:text-white focus:outline-none focus:ring-2 focus:ring-gray-800">
                                    <img class=" dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg" alt="bag">
                                    <img class=" dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg" alt="bag">
                                </a>
                            </div> 

                            <div class="flex lg:hidden">
                                <button aria-label="show options" onclick="mdOptionsToggle()" class="text-black dark:text-white dark:hover:text-gray-300 hidden md:flex focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                                    <img class=" dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5.svg" alt="toggler">
                                    <img class=" dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5dark.svg" alt="toggler">
                                </button>

                                <button aria-label="open menu" onclick="openMenu()" class="text-black dark:text-white dark:hover:text-gray-300 md:hidden focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                                    <img class=" dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5.svg" alt="toggler">
                                    <img class=" dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg5dark.svg" alt="toggler">
                                </button>
                            </div>
                        </div> 
                    
                    </div>
                </div>
                <!-- For small screen -->
                <div id="mobile-menu" class="hidden absolute dark:bg-gray-900 z-10 inset-0 md:hidden flex flex-col h-screen w-full">
                    <div class="flex items-center justify-between border-b border-gray-200 dark:border-gray-700 pb-4 p-4">
                        <div class="flex items-center space-x-3">
                            <div>
                                <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2.svg" alt="search">
                                <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg2dark.svg" alt="search">
                            </div>
                            <input type="text" placeholder="Search for products" class="text-sm dark:bg-gray-900 text-gray-600 placeholder-gray-600 dark:placeholder-gray-300 focus:outline-none" />
                        </div>

                        <button onclick="closeMenu()" aria-label="close menu" class="focus:outline-none focus:ring-2 rounded focus:ring-gray-600">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg6.svg" alt="cross">
                            <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg6dark.svg" alt="cross">
                        </button>
                    </div>
                    <div class="mt-6 p-4 ">
                        <ul class="flex flex-col space-y-6">
                            <li>
                                <a href="../index.php" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800" style="font-size: 20px;">
                                    Início
                                    <div>
                                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="../carrinho.php" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800" style="font-size: 20px;">
                                    Carrinho
                                    <div>
                                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="../sobre.php" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800" style="font-size: 20px;">
                                    Sobre Nós
                                    <div>
                                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="../acesso_config.php?primeiro_nome=<?php echo $_SESSION['primeiro_nome'];?>" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800" style="font-size: 20px;">
                                    Configurações
                                    <div>
                                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="../produtos/categorias.php" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800" style="font-size: 20px;">
                                    Produtos
                                    <div>
                                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="../logout.php" class="dark:text-white flex items-center justify-between hover:underline text-base text-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-800" style="font-size: 20px;">
                                    Sair
                                    <div>
                                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7.svg" alt="arrow">
                                        <img class="dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg7dark.svg" alt="arrow">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="h-full flex items-end">
                        <ul class="flex flex-col space-y-8 bg-gray-50 w-full py-10 p-4 dark:bg-gray-800">
                            <li>
                                <a href="javascript:void(0)" class="dark:text-white text-gray-800 flex items-center space-x-2 focus:outline-none focus:ring-2 focus:ring-gray-800 hover:underline">
                                    <div>
                                        <img class="w-5 dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4.svg" alt="bag">
                                        <img class="w-5 dark:block hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/navigation-I-svg4dark.svg" alt="bag">
                                    </div>
                                    <p class="text-base">Cart</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
