<?php
class MarcaController {
    public function findAll(){
    }
    public function save(Marca $marca){
    }
    public function update(Marca $marca){
    }
    public function delete(Marca $marca){
    }
    public function findById($id){
        try {
            $conexao = Conexao::getInstance();

            $stmt = $conexao->prepare("SELECT * FROM marca WHERE id = :id");

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

            $marca = new Marca($resultado["id"], $resultado["nome"]);

            return $marca;
        } catch(PDOException $e) {
            echo "Erro ao buscar a marca: " . $e->getMessage();
        }
    }
}