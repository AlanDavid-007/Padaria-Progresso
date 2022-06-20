<?php
require __DIR__ . '../../vendor/autoload.php';
//adaptar
define('TITLE', 'Editar Categoria');

use \App\Entity\Categoria;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../index.php?status=error');
    exit;
}

//Consulta Vaga
$obCategoria = Categoria::getCategoria($_GET['id']);
// echo "<pre>"; print_r($obCategoria); echo "<pre>"; exit;

//Validação da Vaga
if (!$obCategoria instanceof Categoria) {
    header('location: ../index.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['nome'], $_POST['imagem'], $_POST['link'])) {

    $obCategoria->nome = $_POST['nome'];
    $obCategoria->imagem = $_POST['imagem'];
    $obCategoria->link = $_POST['link'];

    $obCategoria->atualizar();
    // echo "<pre>"; print_r($obProduto); echo "</pre>"; exit; 

    header('location: ../index.php?status=success');
    exit;
}

require __DIR__ . '../../Includes/header_pasta.php';
require __DIR__ . '../../Includes/formulario_categorias.php';
require __DIR__ . '../../Includes/footer_pasta.php';
