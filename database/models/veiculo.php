<?php

namespace ConexaoPHPPostgres;

class veiculoModel{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }


    public function all(){
        $stmt = $this->pdo->query('SELECT placa, cpfcliente, marca, modelo, ano FROM public.veiculo');
        $stocks = [];
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $stocks[] = [
                'placa' => $row['placa'],
                'cpfcliente' => $row['cpfcliente'],
                'marca' => $row['marca'],
                'modelo' => $row['modelo'],
                'ano' => $row['ano'],
            ];
        }
        return $stocks;
    }

    public function insert($placa, $cpfcliente, $marca, $modelo, $ano){
        $sql = 'INSERT INTO veiculo (placa, cpfcliente, marca, modelo, ano) VALUE (:placa, :cpfcliente, :marca, :modelo, :ano)';
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':placa', $placa);
        $stmt->bindValue(':cpfcliente', $cpfcliente);
        $stmt->bindValue(':marca', $marca);
        $stmt->bindValue(':modelo', $modelo);
        $stmt->bindValue(':ano', $ano);

        $stmt->execute();
    }

    public function update($placa, $cpfcliente, $marca, $modelo, $ano){
        $sql = "UPDATE public.veiculo SET placa = '$placa', cpfcliente = '$cpfcliente', marca = '$marca', modelo = '$modelo', ano = '$ano' WHERE placa = 'placa' "; 
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    
    public function delete_by_id($id){
        $sql = "DELETE from veiculo WHERE placa ='$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function select_by_id($id){
        $stmt = $this->pdo->query("SELECT placa, cpfcliente, marca, modelo, ano FROM public.veiculo WHERE placa = '$id' ");
        $cliente = $stmt->fetch(\PDO::FETCH_ASSOC);
        if($cliente){
            return [
                'placa' => $cliente['placa'],
                'cpfcliente' => $cliente['cpfcliente'],
                'marca' => $cliente['marca'],
                'modelo' => $cliente['modelo'],
                'ano' => $cliente['ano'],
            ];
        } else {
            return NULL;
        }
    }
}