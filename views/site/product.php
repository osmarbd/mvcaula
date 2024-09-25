<?php require VIEWS_PATH . 'includes/header.php'; ?>

<div class="container">

    <div class="jumbotron">
        <div class="col-sm-12 mx-auto">
            <h1>Produto da Empresa</h1>
        </div>
    </div>

    <div class="col-md-12 mx-auto">
        <div class="row">
                <div class="col-md-6">
                    <img src="http://via.placeholder.com/520x350?text=Produto<?= $this->product[0]['name'];?>"
                         alt=""
                         class="img-resposive">

                </div>
                <div class="col-md-6">
                    <h4>
                        <?= $this->product[0]['name']; ?>
                    </h4>
                    <p>
                        <?= $this->product[0]['description']; ?>
                    </p>
                    <p>
                        <?= "R$ " .number_format($this->product[0]['price'],2,',', '.'); ?>
                    </p>
                </div>

        </div>
    </div>

</div>

<?php require VIEWS_PATH . 'includes/footer.php'; ?>
