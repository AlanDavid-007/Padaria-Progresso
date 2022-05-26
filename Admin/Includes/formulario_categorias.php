<?php
require __DIR__ . '../Includes/header_pasta.php';
?>
<section class="formulario">
    <a href="../Index/index_cursos.php">
        <button class="btn btn-header btn-lg">Voltar</button>
    </a>

    <form method="post" class="form-send ">
        <div class="form-group">
            <label style="margin-left:25%">Nome</label>
            <input type="text" required class="form-control " style="width: 50%; margin-left:25%" name="nome" value="<?php echo isset($obPromocao->nome) ? $obPromocao->nome : ''; ?>">
        </div>

        <div class="form-group">
            <button style="margin-left:25%" type="submit" class="btn btn-header btn-lg">Enviar</button>
        </div>
    </form>
</section>
<?php
require __DIR__ . '../Includes/footer_pasta.php';
?>