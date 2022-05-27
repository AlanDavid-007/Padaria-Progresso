
<section class="formulario">
    <a href="../Index/index_cursos.php">
        <button class="btn btn-header btn-lg">Voltar</button>
    </a>

    <form method="post" class="form-send ">

    <div class="form-group">
            <label style="margin-left:25%">Descrição</label>
            <textarea class="form-control" style="width: 50%; margin-left:25%" required name="descricao" rows="5"><?php echo isset($obPedido->descricao) ? $obPedido->descricao : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label style="margin-left:25%">Valor</label>
            <input type="text" required class="form-control " style="width: 50%; margin-left:25%" name="valor" value="<?php echo isset($obPedido->valor) ? $obPedido->nome : ''; ?>">
        </div>

        <div class="form-group">
            <label style="margin-left:25%">Aprova Pedido</label>
            <textarea class="form-control" style="width: 50%; margin-left:25%" required name="aprovapedido" rows="5"><?php echo isset($obPedido->aprovapedido) ? $obPedido->aprovapedido : ''; ?></textarea>
        </div>

        <div class="form-group">
            <label style="margin-left:25%">Data</label>
            <input type="date" style="width: 50%; margin-left:25%" required class="form-control" name="data" value="<?php echo isset($obPedido->data) ? date('Y-m-d', strtotime($obPedido->data)) : ''; ?>">
        </div>

        <div class="form-group">
            <label style="margin-left:25%">Valor Tele Entrega</label>
            <select class="form-control" style="width: 50%; margin-left:25%" name="pedido" value="">
                <option value="">Selecione um Valor Tele Entrega</option>
                <option value="">Nenhum Valor</option>
                <?php foreach ($listaValorTele as $key => $value) { ?>
                    <option value="<?php echo $value->id; ?>" <?php echo $obPedido->id == $value->id ? "selected" : ''; ?>> <?php echo $value->nome; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label style="margin-left:25%">Pagamento</label>
            <select class="form-control" style="width: 50%; margin-left:25%" name="Pagamento" value="">
                <option value="">Selecione um Pagamento</option>
                <option value="">Nenhum Pagamento</option>
                <?php foreach ($listaPagamento as $key => $value) { ?>
                    <option value="<?php echo $value->id; ?>" <?php echo $obPedido->id == $value->id ? "selected" : ''; ?>> <?php echo $value->nome; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label style="margin-left:25%">Usuário</label>
            <select class="form-control" style="width: 50%; margin-left:25%" name="promocoes" value="">
                <option value="">Selecione um Usuário</option>
                <option value="">Nenhum Usuário</option>
                <?php foreach ($listaUsuario as $key => $value) { ?>
                    <option value="<?php echo $value->id; ?>" <?php echo $obPedido->id == $value->id ? "selected" : ''; ?>> <?php echo $value->nome; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label style="margin-left:25%">Cliente</label>
            <select class="form-control" style="width: 50%; margin-left:25%" name="promocoes" value="">
                <option value="">Selecione um Cliente</option>
                <option value="">Nenhum Cliente</option>
                <?php foreach ($listaCliente as $key => $value) { ?>
                    <option value="<?php echo $value->id; ?>" <?php echo $obPedido->id == $value->id ? "selected" : ''; ?>> <?php echo $value->nome; ?></option>
                <?php } ?>
            </select>
        </div>

        <!-- <div class="form-group">
            <label>Data</label>
            <input type="date" required class="form-control" name="data" value="<?php echo isset($obPedido->data) ? date('Y-m-d', strtotime($obPedido->data)) : ''; ?>">
        </div>

        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">

                    <label>
                        <input type="radio" name="status" value="s" <?php echo isset($obPedido->status) && $obPedido->status == 's' ? 'checked' : ''; ?>>
                        Ativo
                    </label>

                    <label class="ml-3">
                        <input type="radio" name="status" value="n" <?php echo isset($obPedido->status) && $obPedido->status == 'n' ? 'checked' : ''; ?>>
                        Inativo
                    </label>
                </div>
            </div>
        </div> -->

        <div class="form-group">
            <button style="margin-left:25%" type="submit" class="btn btn-header btn-lg">Enviar</button>
        </div>
    </form>
</section>
