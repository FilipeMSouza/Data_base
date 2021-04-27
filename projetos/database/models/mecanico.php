<?php

namespace ConexaoPHPPostgres;

class mecanicoModel{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function all(){
        $stmt = $this->pdo->query('SELECT nome, celular, cpf FROM public.mecanico');
        $stocks = [];
        while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
            $stocks[] = [
                'nome' => $row['nome'],
                'celular' => $row['celular'],
                'cpf' => $row['cpf'],
            ];
        }
        return $stocks;
    }


    public function insert($nome, $celular, $cpf){
        $sql = "INSERT INTO mecanico (nome, celular, cpf) VALUES (:nome, :celular, :cpf)";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':celular', $celular);
        $stmt->bindValue(':cpf', $cpf);

        $stmt->execute();
    }

    public function update($nome, $celular, $cpf){
        $sql = "UPDATE public.mecanico SET nome = '$nome', celular = '$celular', cpf = '$cpf' WHERE cpf = 'cpf' "; 
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function delete_by_id($id){
        $sql = "DELETE from mecanico WHERE cpf ='$id' ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }

    public function select_by_id($id){
        $stmt = $this->pdo->query("SELECT nome, celular, cpf FROM public.mecanico WHERE cpf = '$id' ");
        $mecanico = $stmt->fetch(\PDO::FETCH_ASSOC);
        if($mecanico){
            return [
                'nome' => $mecanico['nome'],
                'celular' => $mecanico['celular'],
                'cpf' => $mecanico['cpf'],
            ];
        } else {
            return NULL;
        }
    }
} 