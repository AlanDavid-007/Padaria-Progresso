
<section class="formulario bg-white">
    <a href="../index.php" >
        <button class="btn btn-header btn-lg">Voltar</button>
    </a>

    <form method="post" class="form-send">
        <div class="form-group">
            <label >Nome</label>
            <input type="text" required class="form-control "  name="nome" value="<?php echo isset($obCategoria->nome) ? $obCategoria->nome : ''; ?>">
        </div>
        <div class="form-group">
                <label for="formFile" >Imagem</label>
                <input class="form-control"   type="file" name="imagem"  value="<?php echo isset($obCategoria->imagem) ? $obCategoria->imagem : ''; ?>">
            </div>
            <div class="form-group">
            <label >Link para Produtos</label>
            <input type="text" required class="form-control "  name="link" value="<?php echo isset($obCategoria->link) ? $obCategoria->link : ''; ?>">
        </div>
        <div class="form-group">
            <button  type="submit" class="btn btn-header btn-lg">Enviar</button>
        </div>
    </form>
</section>
