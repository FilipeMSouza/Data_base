<?php

namespace ConexaoPHPPostgres;

class consertoModel{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    
    public function all(){
        $stmt = $this->pdo->query('SELECT mecanico, idcodigorevisao, placa, datarevisao, valorrevisao, descricao, cliente FROM public.conserto');
        $stocks = [];
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $stocks[] = [
                'mecanico' => $row['mecanico'],
                'idcodigorevisao' => $row['idcodigorevisao'],
                'placa' => $row['placa,'],
                'datarevisao' => $row['datarevisao,'],
                'valorrevisao' => $row['valorrevisao,'],
                'descricao' => $row['descricao,'],
                'cliente' => $row['cliente,'],
            ];
        }
        return $stocks;
    }
 
    public function insert($mecanico, $idcodigorevisao, $placa, $datarevisao, $valorrevisao, $descricao, $cliente){
        $sql = 'INSERT INTO conserto (mecanico, idcodigorevisao, placa, datarevisao, valorrevisao, descricao, cliente) VALUE (:mecanico, :idcodigorevisao, :placa, :datarevisao, :valorrevisao, :descricao, :cliente)';
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':mecanico', $mecanico);
        $stmt->bindValue(':idcodigorevisao', $idcodigorevisao);
        $stmt->bindValue(':placa', $placa);
        $stmt->bindValue(':datarevisao', $datarevisao);
        $stmt->bindValue(':valorrevisao', $valorrevisao);
        $stmt->bindValue(':descricao', $descricao);
        $stmt->bindValue(':cliente', $cliente);

        $stmt->execute();
    }

    public function update($mecanico, $idcodigorevisao, $placa, $datarevisao, $valorrevisao, $descricao, $cliente){
        $sql = "UPDATE public.conserto SET mecanico = '$mecanico', idcodigorevisao = '$idcodigorevisao', placa = '$placa', $datarevisao = 'datarevisao', $valorrevisao = 'valorrevisao', $descricao = 'descricao', $cliente = 'cliente' WHERE idcodigorevisao = 'idcodigorevisao' "; 
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function delete_by_id($id){
        $sql = "DELETE from conserto WHERE idcodigorevisao ='$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function select_by_id($id){
        $stmt = $this->pdo->query("SELECT mecanico, idcodigorevisao, placa, datarevisao, valorrevisao, descricao, clienteFROM public.conserto WHERE idcodigorevisao = '$id' ");
        $revisao = $stmt->fetch(\PDO::FETCH_ASSOC);
        if($revisao){
            return [
                'mecanico' => $revisao['mecanico'],
                'idcodigorevisao' => $revisao['idcodigorevisao'],
                'placa' => $revisao['placa,'],
                'datarevisao' => $revisao['datarevisao,'],
                'valorrevisao' => $revisao['valorrevisao,'],
                'descricao' => $revisao['descricao,'],
                'cliente' => $revisao['cliente,'],
            ];
        } else {
            return NULL;
        }
    }

}