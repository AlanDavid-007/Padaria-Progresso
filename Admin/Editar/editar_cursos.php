<?php
require __DIR__ . '../../vendor/autoload.php';
//adaptar
define('TITLE', 'Editar Curso');

use App\Entity\Categoria;
use \App\Entity\Curso;
use \App\Entity\Professor;

$obCurso = new Curso;
$obProfessores = new Professor;
$obCategorias = new Categoria;

$listaProfessor = $obProfessores::getProfessores();
$listaCategoria = $obCategorias::getCategorias();

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../Index/index_cursos.php?status=error');
    exit;
}

//Consulta Vaga
$obCurso = $obCurso::getCurso($_GET['id']);
// echo "<pre>"; print_r($obCurso); echo "<pre>"; exit;

//Validação da Vaga
if (!$obCurso instanceof $obCurso) {
    header('location: ../Index/index_cursos.php?status=error');
    exit;
}

//Validação do POST
if (isset($_POST['nome'], $_POST['palavra_chave'], $_POST['valor'], $_POST['ordem'], $_POST['professor'], $_POST['categoria'], $_POST['data'], $_POST['status'])) {

    $obCurso->nome = $_POST['nome'];
    $obCurso->palavra_chave = $_POST['palavra_chave'];
    $obCurso->valor = $_POST['valor'];
    $obCurso->ordem = $_POST['ordem'];
    $obCurso->professor = $_POST['professor'];
    $obCurso->categoria = $_POST['categoria'];
    $obCurso->data = $_POST['data'];
    $obCurso->status = $_POST['status'];
    $obCurso->atualizar();
    // echo "<pre>"; print_r($obCurso); echo "</pre>"; exit; 

    header('location: ../Index/index_cursos.php?status=success');
    exit;
}


require __DIR__ . '../../INCLUDES/header_editar.php';

require __DIR__ . '../../INCLUDES/formulario_cursos.php';

require __DIR__ . '../../INCLUDES/footer.php';