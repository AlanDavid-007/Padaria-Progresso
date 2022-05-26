<?php
require __DIR__ . '../Includes/header_pasta.php';
?>
    <section class="formulario">
        <a href="../produtos/categorias.php">
            <button class="btn btn-header btn-lg btn-success">Voltar</button>
        </a>

        <form method="post" class="form-send ">
            <div class="form-group">
                <label style="margin-left:25%">Nome</label>
                <input type="text" required class="form-control " style="width: 50%; margin-left:25%" name="nome" value="<?php echo isset($obProdutos->nome) ? $obProdutos->nome : ''; ?>">
            </div>

            <div class="form-group">
                <label style="margin-left:25%">Descrição</label>
                <textarea class="form-control" style="width: 50%; margin-left:25%" required name="descricao" rows="5"><?php echo isset($obProdutos->descricao) ? $obProdutos->descricao : ''; ?></textarea>
            </div>

            <div class="form-group">
                <label style="margin-left:25%">Quantidade</label>
                <textarea class="form-control" style="width: 50%; margin-left:25%" required name="quantidade" rows="1"><?php echo isset($obProdutos->quantidade) ? $obProdutos->quantidade : ''; ?></textarea>
            </div>
            <div class="form-group">
                <label for="formFile" style="margin-left:25%">Imagem</label>
                <input class="form-control" style="width: 50%; margin-left:25%"  type="file" name="imagem"  value="<?php echo isset($obProdutos->imagem) ? $obProdutos->imagem : ''; ?>">
            </div>
            <div class="form-group">
                <label style="margin-left:25%">Tipo</label>
                <select class="form-control" style="width: 50%; margin-left:25%" name="tipo" value="">
                    <option value="">Selecione um Tipo</option>
                    <option value="">Nenhum tipo</option>
                    <?php foreach ($listaCategoria as $key => $value) { ?>
                        <option value="<?php echo $value->id; ?>" <?php echo $obProdutos->id == $value->id ? "selected" : ''; ?>> <?php echo $value->nome; ?></option>
                    <?php } ?>
                </select>
            </div>

            <!-- <div class="form-group">
                <label style="margin-left:25%">Pedido</label>
                <select class="form-control" style="width: 50%; margin-left:25%" name="pedido_id" value="">
                    <option value="">Selecione um Pedido</option>
                    <option value="">Nenhum pedido</option>
                    <?php foreach ($listaPedido as $key => $value) { ?>
                        <option value="<?php echo $value->id; ?>" <?php echo $obProdutos->id == $value->id ? "selected" : ''; ?>> <?php echo $value->descricao; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label style="margin-left:25%">Promoções</label>
                <select class="form-control" style="width: 50%; margin-left:25%" name="promocoes_id" value="">
                    <option value="">Selecione uma Promoção</option>
                    <option value="">Nenhuma Promoção</option>
                    <?php foreach ($listaPromocao as $key => $value) { ?>
                        <option value="<?php echo $value->id; ?>" <?php echo $obProdutos->id == $value->id ? "selected" : ''; ?>> <?php echo $value->nome; ?></option>
                    <?php } ?>
                </select>
            </div> -->

            <div class="form-group">
                <button style="margin-left:25%" type="submit" class="btn btn-header btn-success btn-lg">Enviar</button>
            </div>
        </form>
    </section>
    <?php
require __DIR__ . '../Includes/footer_pasta.php';
?>