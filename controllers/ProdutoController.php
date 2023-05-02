<?php
require "models\Produto.php";
require "models\Conexao.php";
class ProdutoController {
    public function findAll(){
        
        $conexao = Conexao::getInstance();

        $stmt = $conexao->prepare("SELECT * FROM produto");

        $stmt->execute();

        $produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $produtos;
        
    }
    public function save(Produto $produto){
    }
    public function update(Produto $produto){
    }
    public function delete(Produto $produto){
    }
    public function findById($id){
    }
}