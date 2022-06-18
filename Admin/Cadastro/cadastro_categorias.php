<?php
require __DIR__ . '../../vendor/autoload.php';

use \App\Entity\Categoria;

$obCategoria = new Categoria;

//   echo "<pre>"; print_r($arrayProfessor); echo "</pre>"; exit;
if (isset($_POST['nome'], $_POST['link'])) {

    $obCategoria->nome = $_POST['nome'];
    // $obCategoria->imagem = $_POST['imagem'];
    $obCategoria->link = $_POST['link'];

    $obCategoria->cadastrar();
    // echo "<pre>"; print_r($obProduto); echo "</pre>"; exit; 

    header('location: ../index.php?status=success');
    exit;
}

require __DIR__ . '../../Includes/header_pasta.php';
require __DIR__ . '../../Includes/formulario_categorias.php';
require __DIR__ . '../../Includes/footer_pasta.php';