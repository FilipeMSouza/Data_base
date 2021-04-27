<?php

namespace ConexaoPHPPostgres;

class consertoModel{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    
    public function all(){
        $stmt = $this->pdo->query("SELECT mecanico, placa, datarevisao, valorrevisao, descricao, clientecpf FROM public.conserto");
        $stocks = [];
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $stocks[] = [
                'mecanico' => $row['mecanico'],
                'placa' => $row['placa'],
                'datarevisao' => $row['datarevisao'],
                'valorrevisao' => $row['valorrevisao'],
                'descricao' => $row['descricao'],
                'clientecpf' => $row['clientecpf'],
            ];
        }
        return $stocks;
    }
 
    public function insert($mecanico, $placa, $datarevisao, $valorrevisao, $descricao, $clientecpf){
        $sql = "INSERT INTO conserto (mecanico, placa, datarevisao, valorrevisao, descricao, clientecpf) VALUES (:mecanico, :placa, :datarevisao, :valorrevisao, :descricao, :clientecpf)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':mecanico', $mecanico);
        $stmt->bindValue(':placa', $placa);
        $stmt->bindValue(':datarevisao', $datarevisao);
        $stmt->bindValue(':valorrevisao', $valorrevisao);
        $stmt->bindValue(':descricao', $descricao);
        $stmt->bindValue(':clientecpf', $clientecpf);

        $stmt->execute();
    }

    public function update($mecanico, $placa, $datarevisao, $valorrevisao, $descricao, $clientecpf){
        $sql = "UPDATE conserto SET mecanico = '$mecanico', placa = '$placa', datarevisao = '$datarevisao', valorrevisao = '$valorrevisao', descricao = '$descricao', clientecpf = '$clientecpf' WHERE placa = '$placa' "; 
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function delete_by_id($id){
        $sql = "DELETE from conserto WHERE placa ='$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function select_by_id($id){
        $stmt = $this->pdo->query("SELECT mecanico, placa, datarevisao, valorrevisao, descricao, clientecpf FROM public.conserto WHERE placa = '$id' ");
        $revisao = $stmt->fetch(\PDO::FETCH_ASSOC);
        if($revisao){
            return [
                'mecanico' => $revisao['mecanico'],
                'placa' => $revisao['placa'],
                'datarevisao' => $revisao['datarevisao'],
                'valorrevisao' => $revisao['valorrevisao'],
                'descricao' => $revisao['descricao'],
                'clientecpf' => $revisao['clientecpf'],
            ];
        } else {
            return NULL;
        }
    }

}