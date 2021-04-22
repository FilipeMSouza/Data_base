<?php

namespace ConexaoPHPPostgres;

class clienteModel{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }


    public function all(){
        $stmt = $this->pdo->query('SELECT nomecliente, telefone, cpfcliente FROM public.cliente');
        $stocks = [];
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $stocks[] = [
                'nomecliente' => $row['nomecliente'],
                'telefone' => $row['telefone'],
                'cpfcliente' => $row['cpfcliente'],
            ];
        }
        return $stocks;
    }

    public function insert($nomecliente, $telefone, $cpfcliente){
        $sql = "INSERT INTO cliente (nomecliente, telefone, cpfcliente) VALUES (:nomecliente, :telefone, :cpfcliente)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':nomecliente', $nomecliente);
        $stmt->bindValue(':telefone', $telefone);
        $stmt->bindValue(':cpfcliente', $cpfcliente);

        $stmt->execute();
    }

    public function update($nomecliente, $telefone, $cpfcliente){
        $sql = "UPDATE public.cliente SET nomecliente = '$nomecliente', telefone = '$telefone', cpfcliente = '$cpfcliente' WHERE cpfcliente = 'cpfcliente' "; 
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function delete_by_id($id){
        $sql = "DELETE from cliente WHERE cpfcliente='$id'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function select_by_id($id){
        $stmt = $this->pdo->query("SELECT nomecliente, telefone, cpfcliente FROM public.cliente WHERE cpfcliente = '$id' ");
        $cliente = $stmt->fetch(\PDO::FETCH_ASSOC);
        if($cliente){
            return [
                'nomecliente' => $cliente['nomecliente'],
                'telefone' => $cliente['telefone'],
                'cpfcliente' => $cliente['cpfcliente'],
            ];
        } else {
            return NULL;
        }
    }
}