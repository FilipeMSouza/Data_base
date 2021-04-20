<?php
include '../../database/models.php';
//include_once '../../database/database.ini.php';

use ConexaoPHPPostgres\clienteModel as clienteModel;

$nome = null;
$telefone = null;
$cpfcliente = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_REQUEST['nome'];
    $telefone = $_REQUEST['telefone'];
    $cpfcliente = $_REQUEST['cpfcliente'];


    try {
        $clienteModel = new clienteModel($pdo);
        $employerModel->insert($_REQUEST['nome'], $_REQUEST['telefone'], $_REQUEST['cpfcliente']);
        header("Location: ../../pages/mecanico.php");
    } catch (PDOException $e) {
        $error = $e->getMessage();
    }
}
?>


<?php
include('../../templates/header.php');
?>

<div class="container">

    <div class="row py-5">
        <div class="col"><a href="../../pages/cliente.php"><img src="../../assets/images/backbutton.png" height="40px"></a></div>
        <div class="col">
            <h4>Cadastrar novo cliente</h4>
        </div>
        <div class="col"></div>
    </div>

    <form action="cliente.php" method="post">
        <!-- Alerta em caso de erro -->
        <?php if (!empty($error)) : ?>
            <span class="text-danger"><?php echo $error; ?></span>
        <?php endif; ?>

        <div class="form-group">
            <label for="Nome">Nome:</label>
            <input class="form-control" value="<?php echo !empty($nome) ? $nome : ''; ?>" type="text" name="nome" id="nome" required>
        </div>

        <div class="form-group">
            <label for="cpfcliente">CPF Cliente:</label>
            <input class="form-control" type="text" value="<?php echo !empty($cpfcliente) ? $cpfcliente : ''; ?>" name="cpfcliente" id="cpfcliente" required>
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input class="form-control" type="text" value="<?php echo !empty($telefone) ? $telefone : ''; ?>" name="telefone" id="telefone" required>
        </div>

        <input class="btn btn-primary" type="submit" value="Cadastrar">

    </form>
</div>

<?php
include('../../templates/footer.php');
?>