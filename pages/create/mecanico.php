<?php
//include '../../database/models.php';
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

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style/MEC_Style.css">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="../../index.php">
            VHF Mecanica
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="./mecanico.php">Mecanicos <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./veiculo.php">Veiculos</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./conserto.php">Consertos</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container">

    <div class="row py-5">
        <div class="col"><input class="btn btn-light btn-sm" type="submit" value="Retornar"></div>
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
</body>
</html>
<?php
include('../../templates/footer.php');
?>