<?php require VIEWS_PATH . 'includes/header.php'; ?>

    <div class="container">

        <div class="jumbotron">
            <div class="col-sm-12 mx-auto">
                <h1>Produtos da Empresa</h1>
            </div>
        </div>

        <div class="col-md-12 mx-auto">
            <div class="row">
            <?php foreach ($this->products as $product): ?>
                <div class="col-md-4">
                   <img src="http://via.placeholder.com/350x150?text=Produto<?= $product['name'];?>"
                    alt="imagem selecionada"
                    class="img-resposive">
                    <!--<img src="../../img/<?=$product['img'];?>?text=Produto<?= $product['name'];?>"-->
                    <h4>
                        <a href="<?= HOME; ?>/product/show/<?=$product['id']; ?>">
                            <?= $product['name']; ?>
                        </a>
                    </h4>
                    <p>
                        <?= $product['description']; ?>
                    </p>
                    <p>
                        <?= "R$ " .number_format($product['price'],2,',', '.'); ?>
                    </p>
                </div>
            <?php endforeach; ?>
            </div>
        </div>

    </div>

<?php require VIEWS_PATH . 'includes/footer.php'; ?>