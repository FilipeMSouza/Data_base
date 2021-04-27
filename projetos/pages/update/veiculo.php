<?php
include('../../templates/header.php');
?>

<?php
include '../../database/models.php';
include_once '../../database/database.ini.php';

use ConexaoPHPPostgres\consertoModel as consertoModel;
use ConexaoPHPPostgres\veiculoModel as veiculoModel;
use ConexaoPHPPostgres\clienteModel as clienteModel;
use ConexaoPHPPostgres\mecanicoModel as mecanicoModel;

$mecanicoModel = new mecanicoModel($pdo);
$mecanico = $mecanicoModel->all();
$clienteModel = new clienteModel($pdo);
$cliente = $clienteModel->all();
$veiculoModel = new veiculoModel($pdo);
$veiculo = $veiculoModel->all();
$consertoModel = new consertoModel($pdo);

if (!empty($_GET['id'])){
    $id = $_REQUEST['id'];
    $veiculo = $veiculoModel->select_by_id($id);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    try {
        $veiculoModel->update($_REQUEST['placa'], $_REQUEST['cpfcliente'], $_REQUEST['marca'], $_REQUEST['modelo'], $_REQUEST['ano']);
        header("Location: ../../index.php");
    } catch (PDOException $e) {
        $error = $e->getMessage();
    }
}

echo($error);
?>

<style> 
    .navbar{
    background-color: #024059 ;
}

.footer-copyright{
    font-size: 12px;
    background-color: #024059;
    color: white;
}

.form-control{
    box-shadow: 0 2px 5px lightgray;
}
</style>

<div class="container">
    <div class="row py-5">
        <div class="col">
            <h4>Editar veiculo</h4>
        </div>
        <div class="col"></div>
    </div>

    <form action="veiculo.php?id=<?php echo $id ?>" method="post">
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input class="form-control" value="<?php echo $veiculo['modelo']; ?>" type="text" name="modelo" id="modelo" required>
        </div>

        <div class="form-group">
            <label for="marca">Marca:</label>
            <input class="form-control" value="<?php echo $veiculo['marca'] ?>" type="text" name="marca" id="marca" required>
        </div>

        <div class="form-group">
            <label for="placa">Placa:</label>
            <input class="form-control" value="<?php echo $veiculo['placa'] ?>" type="text" name="placa" id="placa" required>
        </div>

        <div class="form-group">
            <label for="ano">Ano</label>
            <input class="form-control" type="date" value="<?php echo $veiculo['ano']?>" name="ano" id="ano" required>
        </div>

        <div class="form-group">
            <label for="cpfcliente">Cliente:</label>
            <select class="form-control" id="cpfcliente" name="cpfcliente" value="<?php echo !empty($cpfcliente) ? $cpfcliente : ''; ?>" required>
                <?php foreach ($cliente as $cliente) : ?>
                    <tr>
                        <option value="<?php echo htmlspecialchars($veiculo['cpfclienteveiculo']); ?>" <?php echo $veiculo['cpfclienteveiculo'] == $veiculo ? "selected" : '' ?>><?php echo htmlspecialchars($cliente['nomecliente']), ' ', htmlspecialchars($cliente['telefone']); ?></option>
                    </tr>
                <?php endforeach; ?>
            </select>
        </div>


        <input type="hidden" name="id" value="<?php echo $id?>">
        <button type="submit" class="btn btn-primary btn-sm">Confirma a deleção</button>
    </form>


</div>
