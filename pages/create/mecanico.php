<?php
include '../../database/models.php';
//include_once '../../database/database.ini.php';

use ConexaoPHPPostgres\mecanicoModel as mecanicoModel;

$nome = null;
$celular = null;
$cpf = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_REQUEST['nome'];
    $celular = $_REQUEST['celular'];
    $cpf = $_REQUEST['cpf'];


    try {
        $mecanicoModel = new mecanicoModel($pdo);
        $employerModel->insert($_REQUEST['nome'], $_REQUEST['celular'], $_REQUEST['cpf']);
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
        <div class="col"><a href="../../pages/mecanico.php"><img src="../../assets/images/backbutton.png" height="40px"></a></div>
        <div class="col">
            <h4>Cadastrar novo mecanico</h4>
        </div>
        <div class="col"></div>
    </div>

    <form action="mecanico.php" method="post">
        <!-- Alerta em caso de erro -->
        <?php if (!empty($error)) : ?>
            <span class="text-danger"><?php echo $error; ?></span>
        <?php endif; ?>

        <div class="form-group">
            <label for="Nome">Nome:</label>
            <input class="form-control" value="<?php echo !empty($nome) ? $nome : ''; ?>" type="text" name="nome" id="nome" required>
        </div>

        <div class="form-group">
            <label for="Ssn">CPF:</label>
            <input class="form-control" type="text" value="<?php echo !empty($cpf) ? $cpf : ''; ?>" name="cpf" id="cpf" required>
        </div>

        <div class="form-group">
            <label for="Ssn">Celular:</label>
            <input class="form-control" type="text" value="<?php echo !empty($celular) ? $celular : ''; ?>" name="celular" id="celular" required>
        </div>

        <input class="btn btn-primary" type="submit" value="Cadastrar">

    </form>
</div>

<?php
include('../../templates/footer.php');
?>