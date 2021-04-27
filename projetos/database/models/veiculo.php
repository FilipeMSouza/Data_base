<?php

namespace ConexaoPHPPostgres;

class veiculoModel{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }


    public function all(){
        $stmt = $this->pdo->query('SELECT placa, cpfclienteveiculo, marca, modelo, ano FROM public.veiculo');
        $stocks = [];
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $stocks[] = [
                'placa' => $row['placa'],
                'cpfclienteveiculo' => $row['cpfclienteveiculo'],
                'marca' => $row['marca'],
                'modelo' => $row['modelo'],
                'ano' => $row['ano'],
            ];
        }
        return $stocks;
    }

    public function insert($placa, $cpfclienteveiculo, $marca, $modelo, $ano){
        $sql = "INSERT INTO veiculo (placa, cpfclienteveiculo, marca, modelo, ano) VALUES (:placa, :cpfclienteveiculo, :marca, :modelo, :ano)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':placa', $placa);
        $stmt->bindValue(':cpfclienteveiculo', $cpfclienteveiculo);
        $stmt->bindValue(':marca', $marca);
        $stmt->bindValue(':modelo', $modelo);
        $stmt->bindValue(':ano', $ano);

        $stmt->execute();
    }

    public function update($placa, $cpfcliente, $marca, $modelo, $ano){
        $sql = "UPDATE public.veiculo SET placa = '$placa', cpfclienteveiculo = '$cpfcliente', marca = '$marca', modelo = '$modelo', ano = '$ano' WHERE placa = '$placa' "; 
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    
    public function delete_by_id($id){
        $sql = "DELETE from veiculo WHERE placa ='$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function select_by_id($id){
        $stmt = $this->pdo->query("SELECT placa, cpfclienteveiculo, marca, modelo, ano FROM public.veiculo WHERE placa = '$id' ");
        $cliente = $stmt->fetch(\PDO::FETCH_ASSOC);
        if($cliente){
            return [
                'placa' => $cliente['placa'],
                'cpfclienteveiculo' => $cliente['cpfclienteveiculo'],
                'marca' => $cliente['marca'],
                'modelo' => $cliente['modelo'],
                'ano' => $cliente['ano'],
            ];
        } else {
            return NULL;
        }
    }
}