<?php
require __DIR__ . '../../vendor/autoload.php';
//adaptar
define('TITLE', 'Editar Professor');

use \App\Entity\Professor;

//Validação do ID
if (!isset($_GET['id'])  || !is_numeric($_GET['id'])) {
    header('location: ../Index/index_professores.php?status=error');
    exit;
}

//Consulta Vaga
$obProfessor = Professor::getProfessor($_GET['id']);
// echo "<pre>"; print_r($obProfessor); echo "<pre>"; exit;

//Validação da Vaga
if (!$obProfessor instanceof Professor) {
    header('location: ../Index/index_professores.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['nome'],$_POST['sobrenome'],$_POST['cpf'],$_POST['formacao'],$_POST['telefone'], $_POST['endereco'], $_POST['email'], $_POST['ordem'], $_POST['status'])) {

    $obProfessor->nome = $_POST['nome'];
    $obProfessor->sobrenome = $_POST['sobrenome'];
    $obProfessor->cpf = $_POST['cpf'];
    $obProfessor->formacao = $_POST['formacao'];
    $obProfessor->telefone = $_POST['telefone'];
    $obProfessor->endereco = $_POST['endereco'];
    $obProfessor->email = $_POST['email'];
    $obProfessor->ordem = $_POST['ordem'];
    $obProfessor->status = $_POST['status'];
    $obProfessor->atualizar();
    // echo "<pre>"; print_r($obProfessor); echo "</pre>"; exit; 

    header('location: ../Index/index_professores.php?status=success');
    exit;
}



require __DIR__ . '../Includes/header_pasta.php';

require __DIR__ . '../../INCLUDES/formulario_professores.php';

require __DIR__ . '../Includes/footer_pasta.php';
