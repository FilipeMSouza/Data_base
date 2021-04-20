<?php
include '../../database/models.php';
//include_once '../../database/database.ini.php';

use ConexaoPHPPostgres\veiculoModel as veiculoModel;
use ConexaoPHPPostgres\clienteModel as clienteModel;
use ConexaoPHPPostgres\consertoModel as consertoModel;
use ConexaoPHPPostgres\mecanicoModel as mecanicoModel;

$clienteModel = new clienteModel($pdo);
$cliente = $clienteModel->all();
$veiculoModel = new veiculoModel($pdo);
$veiculo = $veiculoModel->all();
$mecanicomodel = new mecanicoModel($pdo);
$mecanico = $mecanicomodel->all();

$mecanico = null;
$placa = null;
$cliente = null;
$idcodigorevisao = null;
$datarevisao = null;
$valorrevisao = null;
$descricao = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mecanico =  $_REQUEST['mecanico'];
    $idcodigorevisao =  $_REQUEST['idcodigorevisao'];
    $placa =  $_REQUEST['placa'];
    $datarevisao =  $_REQUEST['datarevisao'];
    $valorrevisao =  $_REQUEST['valorrevisao'];
    $descricao =  $_REQUEST['descricao'];
    $cliente =  $_REQUEST['cliente'];

    try {
        $consertoModel = new consertoModel($pdo);
        $consertoModel->insert($_REQUEST['mecanico'], $_REQUEST['idcodigorevisao'], $_REQUEST['placa'], $_REQUEST['datarevisao'], $_REQUEST['valorrevisao'], $_REQUEST['descricao'], $_REQUEST['cliente']);
        header("Location: ../../pages/veiculo.php");
    } catch (PDOException $e) {
        $error = $e->getMessage();
    }
}
?>



<div class="container">
    <div class="row py-5">
        <div class="col"><a href="../../pages/veiculo.php"><img src="../../assets/images/backbutton.png" height="30px"></a></div>
        <div class="col">
            <h4>Cadastrar conserto</h4>
        </div>
        <div class="col"></div>
    </div>

    <form action="veiculo.php?id=<?php echo $id ?>" method="post">
        <!-- Alerta em caso de erro -->
        <?php if (!empty($error)) : ?>
            <span class="text-danger"><?php echo $error; ?></span>
        <?php endif; ?>

        <input type="hidden" name="id" value="<?php echo $id; ?>" />

        <div class="form-group">
            <label for="mecanico">Mecanico:</label>
            <select class="form-control" id="mecanico" name="mecanico" value="<?php echo !empty($mecanico) ? $mecanico : ''; ?>" required>
                <?php foreach ($mecanico as $mecanico) : ?>
                    <tr>
                        <option value="<?php echo htmlspecialchars($mecanico['mecanico']); ?>" <?php echo $mecanico['mecanico'] == $mecanico ? "selected" : '' ?>><?php echo htmlspecialchars($mecanico['nome']), ' ', htmlspecialchars($mecanico['cpf']); ?></option>
                    </tr>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="codigocliente">Cliente:</label>
            <select class="form-control" id="cpfcliente" name="cpfcliente" value="<?php echo !empty($cpfcliente) ? $cpfcliente : ''; ?>" required>
                <?php foreach ($cliente as $cliente) : ?>
                    <tr>
                        <option value="<?php echo htmlspecialchars($cliente['cpfcliente']); ?>" <?php echo $cliente['cpfcliente'] == $cpfcliente ? "selected" : '' ?>><?php echo htmlspecialchars($cliente['nomecliente']), ' ', htmlspecialchars($cliente['telefone']); ?></option>
                    </tr>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="placa">Placa:</label>
            <select class="form-control" id="placa" name="placa" value="<?php echo !empty($placa) ? $placa : ''; ?>" required>
                <?php foreach ($veiculo as $veiculo) : ?>
                    <tr>
                        <option value="<?php echo htmlspecialchars($veiculo['placa']); ?>" <?php echo $veiculo['placa'] == $placa ? "selected" : '' ?>><?php echo htmlspecialchars($veiculo['placa']), ' ', htmlspecialchars($cliente['modelo']); ?></option>
                    </tr>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="valorrevisao">Valore Revisão:</label>
            <input class="form-control" value="<?php echo !empty($valorrevisao) ? $valorrevisao : ''; ?>" type="text" name="valorrevisao" id="valorrevisao" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input class="form-control" value="<?php echo !empty($descricao) ? $descricao : ''; ?>" type="text" name="descricao" id="descricao" required>
        </div>

        <div class="form-group">
            <label for="datarevisao">Data da Revisao:</label>
            <input class="form-control" type="date" value="<?php echo !empty($datarevisao) ? $datarevisao : ''; ?>" name="datarevisao" id="datarevisao" required>
        </div>

        <input class="btn btn-primary" type="submit" value="Cadastrar">

    </form>
</div>