<?php
//adaptar
require __DIR__ . '../../vendor/autoload.php';

define('TITLE', 'Cadastrar Cursos');
define('HREF2', '../Index/index_cursos.php');
define('TEXT', 'Curso');

use \App\Entity\Curso;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../Index/index_cursos.php?status=error');
    exit;
}

//Consulta Curso
$obCurso = Curso::getCurso($_GET['id']);
// echo "<pre>"; print_r($obCurso); echo "<pre>"; exit;

//Validação da Curso
if (!$obCurso instanceof Curso) {
    header('location: ../Index/index_cursos.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['excluir'])) {

    $obCurso->excluir();

    header('location: ../Index/index_cursos.php?status=success');
    exit;
}

require __DIR__ . '../../INCLUDES/header_editar.php';
require __DIR__ . '../../INCLUDES/confirmarExclusao_cursos.php';
require __DIR__ . '../../INCLUDES/footer.php';
