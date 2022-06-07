    <section class="formulario bg-white d-flex justify-content-around">
        <a href="../produtos/categorias.php">
            <button class="btn btn-header btn-lg btn-success">Voltar</button>
        </a>

        <form method="post" class="form-send ">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" required class="form-control " name="nome" value="<?php echo isset($obProdutos->nome) ? $obProdutos->nome : ''; ?>">
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" required name="descricao" rows="5"><?php echo isset($obProdutos->descricao) ? $obProdutos->descricao : ''; ?></textarea>
            </div>

            <div class="form-group">
                <label>Quantidade</label>
                <textarea class="form-control" required name="quantidade" rows="1"><?php echo isset($obProdutos->quantidade) ? $obProdutos->quantidade : ''; ?></textarea>
            </div>
            <div class="form-group">
                <label>Preço</label>
                <textarea class="form-control" required name="preco" rows="1"><?php echo isset($obProdutos->preco) ? $obProdutos->preco : ''; ?></textarea>
            </div>
            <div class="form-group">
                <label for="formFile">Imagem</label>
                <input class="form-control" type="file" name="imagem" value="<?php echo isset($obProdutos->imagem) ? $obProdutos->imagem : ''; ?>">
            </div>
            <div class="form-group">
                <label>Link para Detalhes</label>
                <input type="text" required class="form-control " name="link" value="<?php echo isset($obProdutos->link) ? $obProdutos->link : ''; ?>">
            </div>
            
            <div class="form-group">
                <label>Tipo</label>
                <select class="form-control" name="tipo" value="">
                    <option value="">Selecione um Tipo</option>
                    <option value="">Nenhum tipo</option>
                    <?php foreach ($listaCategoria as $key => $value) { ?>
                        <option value="<?php echo $value->id; ?>" <?php echo $obProdutos->id == $value->id ? "selected" : ''; ?>> <?php echo $value->nome; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-header btn-success btn-lg">Enviar</button>
            </div>
        </form>
        <div class="card mt-4 bg-secondary opacity-60 text-white" style="width: 28rem; height:20rem;">
            <div class="card-body">
                <h5 class="card-title">Nota:</h5>
                <h6 class="card-subtitle mb-2 ">Observação sobre campo link, Nele Coloque: </h6>
                <p class="card-text">"produtos_detalhes/Detalhes?nome=nomedoproduto&quantity=1"</p>
                <br>
                <p class="card-text">Obs: Onde está "nomedoproduto"<br> coloque o nome que desejar colocar para produto</p>
                <br>
                <p class="card-text">Exemplo: ../produtos_detalhes/Detalhes?nome=Risóles+de+Frango&quantity=1</p>
            </div>
        </div>
    </section>