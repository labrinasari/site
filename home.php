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
<br>
<center><h3><a href="tutorial.php">Quer aprender à fazer uma manutenção preventiva em casa? Confira nosso artigo!</a></h3></center>
<p>Muitas pessoas esquecem que a limpeza também é um grande fator no desempenho e saúde do seu computador.
    <br>
    Muitas vantagens podem ser descritas pelo uso eficaz da manutenção preventiva, como reduzir os riscos de quebra, envelhecimento e degeneração dos equipamentos, programar a conservação das peças, atuar antes da manutenção corretiva, amenizar os custos de compra de novos itens, entre outros. O monitoramento mensal de produtos industriais e automotivos é analisado por um pessoal qualificado e apto para resolver os possíveis problemas que aparecerão com o decorrer do tempo, uma vantagem a mais para as companhias.
    <br>
    <b><a href="tutorial.php">Leia Mais!</a></b>
</p>
