<?php
require __DIR__ . '../../vendor/autoload.php';
//adaptar
define('TITLE', 'Editar Categoria');

use \App\Entity\Categoria;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../Index/index_categorias.php?status=error');
    exit;
}

//Consulta Vaga
$obCategoria = Categoria::getCategoria($_GET['id']);
// echo "<pre>"; print_r($obCategoria); echo "<pre>"; exit;

//Validação da Vaga
if (!$obCategoria instanceof Categoria) {
    header('location: ../Index/index_categorias.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['nome'], $_POST['descricao'], $_POST['ordem'], $_POST['status'])) {

    $obCategoria->nome = $_POST['nome'];
    $obCategoria->descricao = $_POST['descricao'];
    $obCategoria->ordem = $_POST['ordem'];
    $obCategoria->status = $_POST['status'];
    $obCategoria->atualizar();
    // echo "<pre>"; print_r($obCategoria); echo "</pre>"; exit; 

    header('location: ../Index/index_categorias.php?status=success');
    exit;
}


require __DIR__ . '../Includes/header_pasta.php';

require __DIR__ . '../../INCLUDES/formulario_categorias.php';

require __DIR__ . '../Includes/footer_pasta.php';
