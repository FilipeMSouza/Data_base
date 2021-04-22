<?php

include '../database/models.php';
include_once '../database/database.ini.php';

use ConexaoPHPPostgres\clienteModel as clienteModel;
use ConexaoPHPPostgres\consertoModel as consertoModel;
use ConexaoPHPPostgres\veiculoModel as veiculoModel;
use ConexaoPHPPostgres\mecanicoModel as mecanicoModel;

try {

    $consertoModel = new consertoModel($pdo);
    $clienteModel = new clienteModel($pdo);
    $veiculoModel = new veiculoModel($pdo);
    $mecanicoModel = new mecanicoModel($pdo);
    $conserto = $consertoModel->all();
    
} catch (\PDOException $e) {
    echo $e->getMessage();
}

?>

<?php
include('../templates/header.php');
?>
<div class="container">

    <div class="row">
        <div class="col-auto mr-auto">
            <h1 style="padding-top: 10px; padding-bottom:10px">Consertos</h1>
        </div>
        <div class="col-auto">
            <div class="text-right mb-4">
                <a class="btn" style="background-color:#00897c; color:white" href="../../pages/create/conserto.php">Cadastrar novo</a>
            </div>
        </div>
    </div>

    <?php foreach ($conserto as $conserto) : ?>

        <div>
            <div class="alert">
                <div class="card-body" style="background-color: #F4F6FC;">
                    <div class="row" style="padding-bottom: 5px;">
                        <div class="col-sm-1">
                            <img src="../assets/images/user.png" height="70">
                        </div>
                        <div class="col-sm-8">
                            <h5 class="card-title"><?php echo htmlspecialchars($conserto['mecanico']); ?> <?php echo htmlspecialchars($conserto['idcodigorevisao']); ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($employe['placa']); ?></h6>
                        </div>
                    </div>
                    <p class="card-text mb-2"><img src="../assets/icons/map-pin-line.png"> Endereço: <?php echo htmlspecialchars($employe['descricao']); ?></p>
                    <p class="card-text mb-2"><img src="../assets/icons/profile-fill.png"> Cliente: <?php
                                                                                                            $cliente = $consertoModel->select_by_id($employe['dno']);
                                                                                                            echo htmlspecialchars($department['dname']);
                                                                                                            ?></p>


                    <?php
                    $veiculo = $veiculoModel->select_by_id($veiculo['ssn']);
                    $mecanico = $mecanicoModel->select_by_id($mecanico['cpf']);
                    ?>

                    <!-- Lista de Projeto -->
                    <button type="button" class="btn-light collapsibleProjetos">
                        <div class="row">
                            <div class="col">
                                <p class="card-text mb-2"><img src="../assets/icons/file-user-fill.png"> Projetos: </p>
                            </div>
                            <div class="col col-lg-1">
                                <a href="../../pages/create/workson.php?id=<?php echo $employe['ssn']; ?>">Adicionar</a>
                            </div>
                            <div class="col col-lg-1">

                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
