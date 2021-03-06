<?php
include '../../database/models.php';
include_once '../../database/database.ini.php';

use ConexaoPHPPostgres\veiculoModel as veiculoModel;
use ConexaoPHPPostgres\clienteModel as clienteModel;

$clienteModel = new clienteModel($pdo);
$cliente = $clienteModel->all();

$placa = 0;
$codigocliente;
$marca;
$modelo;
$cpfcliente;
$ano;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $placa =  $_REQUEST['placa'];
    $cpfcliente =  $_REQUEST['cpfcliente'];
    $marca =  $_REQUEST['marca'];
    $modelo =  $_REQUEST['modelo'];
    $ano =  $_REQUEST['ano'];
    try {
        $veiculoModel = new veiculoModel($pdo);
        $veiculoModel->insert($_REQUEST['placa'], $_REQUEST['cpfcliente'], $_REQUEST['marca'], $_REQUEST['modelo'], $_REQUEST['ano']);
        header("Location: ../../index.php");
    } catch (PDOException $e) {
        $error = $e->getMessage();
    }
}
?>


<?php
include('../../templates/header.php');
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/Style.css">
</head>
<body>
<div class="container">
    <div class="row py-5">
        <div class="col"><input class="btn btn-light btn-sm" type="submit" value="Retornar"></div>
        <div class="col">
            <h4>Cadastrar novo veiculo</h4>
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
            <label for="placa">Placa:</label>
            <input class="form-control" value="<?php echo !empty($placa) ? $placa : ''; ?>" type="text" name="placa" id="placa" required>
        </div>

        <div class="form-group">
            <label for="codigocliente">CPF Cliente:</label>
            <select class="form-control" id="cpfcliente" name="cpfcliente" value="<?php echo !empty($cpfcliente) ? $cpfcliente : ''; ?>" required>
                <?php foreach ($cliente as $cliente) : ?>
                    <tr>
                        <option value="<?php echo htmlspecialchars($cliente['cpfcliente']); ?>" <?php echo $cliente['cpfcliente'] == $cpfcliente ? "selected" : '' ?>><?php echo htmlspecialchars($cliente['nomecliente']), ' ', htmlspecialchars($cliente['cpfcliente']); ?></option>
                    </tr>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="marca">Marca:</label>
            <input class="form-control" value="<?php echo !empty($marca) ? $marca : ''; ?>" type="text" name="marca" id="marca" required>
        </div>

        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input class="form-control" value="<?php echo !empty($modelo) ? $modelo : ''; ?>" type="text" name="modelo" id="modelo" required>
        </div>

        <div class="form-group">
            <label for="ano">Ano:</label>
            <input class="form-control" type="date" value="<?php echo !empty($ano) ? $ano : ''; ?>" name="ano" id="ano" required>
        </div>

        <input class="btn btn-primary" type="submit" value="Cadastrar">

    </form>
</div>
</body>
</html>

<?php
include('../../templates/footer.php');
?>
