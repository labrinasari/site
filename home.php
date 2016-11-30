<link rel="stylesheet" href="css/style.css">
<center><h3>OFERTAS DO MÊS</h3></center>
<?php
require_once 'dao/DaoProduto.php';
$DaoProduto = DaoProduto::getInstance();
$dadosProduto = $DaoProduto->listarPromocao();
?>
<?php
foreach ($dadosProduto as $rowProduto) {
?>
<ul class="photo-grid">     
	<li>
            <a href="?pg=detalhes&id=<?= $rowProduto["id_produto"] ?>">
			<figure>
				<img src="http://127.0.0.1/software/fotos/<?= $rowProduto["imagem"] ?>" height="250" width="250" alt="Mouse">
				<figcaption><p><?= $rowProduto["descricao"] ?>
                                    <br>
                                    R$ <?= $rowProduto["preco"] ?>
                                    <br>
                                    10x no cartão sem juros
                                    </p>
                                </figcaption>
			</figure>
		</a>
	</li>
</ul>
    <?php
}
?>