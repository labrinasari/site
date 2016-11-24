<?php
require_once 'Conexao.php';
class DaoProduto {
    
    public static $instance;
    private function __construct() {
        //
    }
    public static function getInstance() {
        if (!isset(self::$instance))
            self::$instance = new DaoProduto();
        return self::$instance;
    }
    
    public function listar() {
        $sql = "SELECT produtos.id_produto,"
                . " produtos.nome,"
                . " produtos.preco,"
                . " produtos.imagem"
                . " FROM produtos"
                . " ORDER BY produtos.nome";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function listarPorMarca($categoria) {
        $sql = "SELECT produtos.id_produto,"
                . " produtos.nome,"
                . " produtos.preco,"
                . " produtos.imagem"
                . " FROM produtos"
                . " WHERE produtos.categoria_id =:categoria"
                . " ORDER BY produtos.nome";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->bindValue(":categoria", $categoria);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function listarPromocao() {
        $sql = "SELECT produtos.id_produto,"
                . " produtos.nome,"
                . " produtos.preco,"
                . " produtos.imagem"
                . " FROM produtos"
                . " WHERE produtos.promocao = "
                . " ORDER BY produtos.nome";
        $p_sql = Conexao::getInstance()->prepare($sql);
        $p_sql->execute();
        return $p_sql->fetchAll(PDO::FETCH_ASSOC);
    }
    
}