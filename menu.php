<div class="link-blue selected">
    <a href="?pg=home">
        <i class="fa fa-home"></i>Home
    </a>
</div>
<div class="link-red">
    <a href="#">
        <i class="fa fa-keyboard-o"></i>Produtos
    </a>
    <ul class="sub-links">
                <li><a href="?pg=produtos">Todos</a></li>
        <?php
        require_once 'dao/DaoCategoria.php';
        $DaoCategoria = DaoCategoria::getInstance();
        $dadosCategoria = $DaoCategoria->listar();
foreach ($dadosCategoria as $rowCategoria) {
?>
        <li><a href="?pg=produtos&cat=<?=$rowCategoria["id"]?>"><?=$rowCategoria["descricao"]?></a></li>        
        <?php
}
        ?>
    </ul>
</div>
<div class="link-yellow">
    <a href="#">
        <i class="fa fa-building-o"></i>Empresa
    </a>
    <ul class="sub-links">
        <li><a href="?pg=sobre">Sobre Nós</a></li>
        <li><a href="?pg=servicos">Serviços</a></li>
        <li><a href="?pg=descarte">Descarte</a></li>
    </ul>
</div>
<div class="link-green">
    <a href="#">
        <i class="fa fa-envelope-open-o"></i>Contato
    </a>
    <ul class="sub-links">
        <li><a href="?pg=contato">Contate-nos</a></li>
        <li><a href="?pg=faq">FAQ</a></li>
    </ul>
</div>
<div class="link-purple">
    <a href="?pg=conta">
        <i class="fa fa-users"></i>Conta
    </a>
</div>