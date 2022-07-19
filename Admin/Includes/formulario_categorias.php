
<section class="formulario bg-white d-flex justify-content-around" >
    <a href="../index.php">
        <button class="btn btn-header btn-lg">Voltar</button>
    </a>
    <form method="post" class="form-send" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" required class="form-control " name="nome" value="<?php echo isset($obCategoria->nome) ? $obCategoria->nome : ''; ?>">
        </div>
        <!-- <div class="form-group">
            <label for="formFile">Imagem</label>
            <input class="form-control" type="file" name="arquivo" accept="image/*">
        </div> -->
        <div class="form-group">
            <label>Link para Produtos</label>
            <input type="text" required class="form-control " name="link" value="<?php echo isset($obCategoria->link) ? $obCategoria->link : ''; ?>">
        </div>
        <div class="form-group">
            <button type="submit" name="formbutton" class="btn btn-header btn-lg">Enviar</button>
        </div>
    </form>
    <div class="card mt-4 bg-secondary opacity-60 text-white" style="width: 26rem; height:15rem;" >
        <div class="card-body">
            <h5 class="card-title">Nota:</h5>
            <h6 class="card-subtitle mb-2 ">Observação sobre campo link, Nele Coloque: </h6>
            <p class="card-text">"produtos/categorias?busca=nomedacategoria"</p>
            <br>
            <p class="card-text">Obs: Onde está "nomedacategoria"<br> coloque o nome que desejar colocar para categoria</p>
            <br>
            <p class="card-text">Exemplo: produtos/categorias?busca=Risóles</p>
        </div>
    </div>
</section>
