<?php
include('../../templates/header.php');
?>

<?php
include '../../database/models.php';
include_once '../../database/database.ini.php';

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


$id = 0;

if (!empty($_GET['id'])) {
    $id = $_REQUEST['id'];
    $consertoModel = new consertoModel($pdo);
    $conserto = $consertoModel->select_by_id($id);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    try {
        $consertoModel->delete_by_id($id);
        header("Location: ../../pages/funcionarios.php");
    } catch (PDOException $e) {
        $error = $e->getMessage();
    }
}

?>
<?php if (!empty($employer)) : ?>
    <div class="container">

        <div class="row py-5">
            <div class="col"><a href="../../pages/funcionarios.php"><img src="../../assets/images/backbutton.png" height="30px"></a></div>
            <div class="col">
                <h4>Excluir funcionário</h4>
            </div>
            <div class="col"></div>
        </div>

        <div class="span10">
            <div style="padding-top: 10px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($employer['fname']); ?> <?php echo htmlspecialchars($employer['lname']); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($employer['ssn']); ?></h6>
                        <p class="card-text mb-2">Endereço: <?php echo htmlspecialchars($employer['address']); ?></p>
                        <p class="card-text mb-2">Departamento: <?php
                                                                $department = $departmentModel->select_by_id($employer['dno']);
                                                                echo htmlspecialchars($department['dname']);
                                                                ?></p>
                        <form class="form-horizontal" action="conserto.php?id=<?php echo $id; ?>" method="post">
                            <!-- Alerta em caso de erro -->
                            <?php if (!empty($error)) : ?>
                                <span class="text-danger"><?php echo $error; ?></span>
                            <?php endif; ?>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />
                            <div class="alert  alert-danger" role="alert">
                                <h5> Deseja excluir o Funcionário? </h5>
                                <div class="form actions">
                                    <button type="submit" class="btn btn-danger"> Sim </button>
                                    <a href="../../pages/funcionarios.php" type="btn" class="btn btn-default"> Não </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php
include('../../templates/footer.php');
?>