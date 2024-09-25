<?php require VIEWS_PATH . 'includes/header.php'; ?>

<div class="container">

    <div class="col-md-12 mx-auto">
        <h2>Cadastrar Nova Despesa</h2>
        <hr>
            <form method="post" action="<?=HOME;?>/minhasdespesas/inserir">
                <div class="form-group">
                    <label for="exampleInputPassword1">Valor gasto</label>
                    <input type="text" class="form-control" id="valor" name="valor" placeholder="Informe o valor gasto">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Descrição</label>
                    <textarea class="form-control" id="descricao" name="descricao" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Salvar Despesa</button>
            </form>
    </div>

</div>

<?php require VIEWS_PATH . 'includes/footer.php'; ?>
