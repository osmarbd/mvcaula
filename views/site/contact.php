<?php require VIEWS_PATH . 'includes/header.php'; ?>

<div class="container">

    <div class="jumbotron">
        <div class="col-sm-12 mx-auto">
            <h1>Fale conosco</h1>
        </div>
    </div>

    <div class="col-md-12 mx-auto">
        <h2>Nossos contatos</h2>
        <p>
            <strong>Telefone:</strong> (41) 91112-33251 / (41) 3652-5241
            <br>
            <strong>E-mail:</strong> email@unidombosco.edu.br
        </p>
        <p>
            <strong>Via formulário abaixo:</strong>
        </p>
            <form>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nome Completo</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Informe seu nome completo">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Informe o seu e-mail">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Mensagem</label>
                    <textarea class="form-control" id="exampleInputTextArea" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
    </div>

</div>

<?php require VIEWS_PATH . 'includes/footer.php'; ?>
