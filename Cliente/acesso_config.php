<?php
require __DIR__ . './Includes/header.php';
require __DIR__ . '../vendor/autoload.php';
use \App\Entity\Usuario;
$obUsuarios = new Usuario;
// echo "<pre>"; print_r($acharUsuario); echo "<pre>"; exit;
    // if (in_array($_SESSION['email'] , $email1)) {
    //     $array = array_search($acharUsuario['id'], $usuarios);
    //     echo $array;
    // }

//busca
$busca = filter_input(INPUT_GET, 'email');


//condiçoes sql 
$condicoes = [
    strlen($busca) ? 'email LIKE "%' . str_replace(' ', '%', $busca) . '%"' : null,
];

$condicoes = array_filter($condicoes);

//clausula where
$where = implode(' AND ', $condicoes);
//  echo "<pre>"; print_r($_SESSION['email']); echo "</pre>"; exit;
$usuarios = $obUsuarios::getUsuarios($where);
$nome1 = array_column($usuarios, 'primeiro_nome');
$acharUsuario = in_array($_SESSION['primeiro_nome'] , $nome1);
?>
 <!-- Bloco de Acesso -->
<?php foreach($usuarios as $key => $value) { ?> 
    <section class="mt-5 ml-5 ">
    <form method="get">
        <div class="row alig-items-between">
            <div class="col text-light">
                <label>Filtrar Produtos</label>
                <input type="text" name="email" class="form-control" value="<?= $busca ?>">
            </div>
            <div class="col d-flex align-items-end">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </div>
        </div>
    </form>
</section>
<div class="h-full bg-gradient-to-tl from-black-400 to-gray-900 w-full py-16 px-4">
        <div class="flex flex-col items-center justify-center">
            <div class="bg-white shadow rounded lg:w-1/3  md:w-1/2 w-full p-10 mt-16">
                <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-gray-800">Escolha o quer alterar</p>
                <p tabindex="0" class="focus:outline-none text-2xl font-extrabold leading-6 text-gray-800"><?php echo $value->email;?></p>
                <button aria-label="Continue com google" role="button" class="focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-gray-700 py-3.5 px-4 border rounded-lg border-gray-700 flex items-center w-full mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.995 24h-1.995c0-3.104.119-3.55-1.761-3.986-2.877-.664-5.594-1.291-6.584-3.458-.361-.791-.601-2.095.31-3.814 2.042-3.857 2.554-7.165 1.403-9.076-1.341-2.229-5.413-2.241-6.766.034-1.154 1.937-.635 5.227 1.424 9.025.93 1.712.697 3.02.338 3.815-.982 2.178-3.675 2.799-6.525 3.456-1.964.454-1.839.87-1.839 4.004h-1.995l-.005-1.241c0-2.52.199-3.975 3.178-4.663 3.365-.777 6.688-1.473 5.09-4.418-4.733-8.729-1.35-13.678 3.732-13.678 4.983 0 8.451 4.766 3.732 13.678-1.551 2.928 1.65 3.624 5.09 4.418 2.979.688 3.178 2.143 3.178 4.663l-.005 1.241zm-5.995-3h-5v2h5v-2z"/></svg>    
                <a href="../Cliente/Editar/editar_usuarios.php?busca=<?php echo $_SESSION['email'];?>" class="text-base font-medium ml-4 text-gray-700">Mudar Informações</a>
                </button>
            </div>
        </div>
    </div>
<?php } ?>
<?php
require __DIR__ . './Includes/footer.php';
?>
