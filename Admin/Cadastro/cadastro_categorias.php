<?php
require __DIR__ . '../../vendor/autoload.php';

use \App\Entity\Categoria;

$obCategoria = new Categoria;

//   echo "<pre>"; print_r($arrayProfessor); echo "</pre>"; exit;
if (isset($_POST['nome'])) {

    $obCategoria->nome = $_POST['nome'];

    $obCategoria->cadastrar();
    // echo "<pre>"; print_r($obProduto); echo "</pre>"; exit; 

    header('location: ../produtos/categorias.php?status=success');
    exit;
}

require __DIR__ . '../../Includes/formulario_categorias.php';
