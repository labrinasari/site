<?php
require_once 'dao/DaoProduto.php';
$DaoProduto = DaoProduto::getInstance();
if (!isset($_GET["cat"]) || empty($_GET["cat"])) {
    $dadosProduto = $DaoProduto->listar();
} else {
    $dadosProduto = $DaoProduto->listarPorMarca($_GET["cat"]);
}
?>
<center><h3>Nossos Produtos</h3></center>
<ul class="photo-grid">
<?php
foreach ($dadosProduto as $rowProduto) {
    ?>

	<li>
            <a href="?pg=detalhes&id=<?= $rowProduto["id_produto"] ?>">
			<figure>
				<img src="http://127.0.0.1/software/fotos/<?= $rowProduto["imagem"] ?>">
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

    <?php
}
?>
</ul>