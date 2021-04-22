<?php
include 'database/models.php';
include_once 'database/database.ini.php';

use ConexaoPHPPostgres\clienteModel as clienteModel;
use ConexaoPHPPostgres\mecanicoModel as mecanicoModel;

$clienteModel = new clienteModel($pdo);
$cliente = $clienteModel->all();
$mecanicoModel = new mecanicoModel($pdo);
$mecanico = $mecanicoModel->all();

?>

<?php
include('templates/header.php');
?>

<table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">Telefone</th>
        </tr>
    </thead>
    <?php foreach ($cliente as $cliente):?>
    <tbody>
        <tr>
            <th scope="row"><?php echo $cliente['nomecliente']?></th>
            <th scope="row"><?php echo $cliente['cpfcliente']?></th>
            <th scope="row"><?php echo $cliente['telefone']?></th>
        </tr>
    </tbody>
    <?php endforeach;?>
</table>

<table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">Mecanico</th>
        <th scope="col">Telefone</th>
        <th scope="col">CPF do Mecanico</th>
        </tr>
    </thead>
    <?php foreach ($mecanico as $mecanico):?>
    <tbody>
        <tr>
            <th scope="row"><?php echo $mecanico['nome']?></th>
            <th scope="row"><?php echo $mecanico['celular']?></th>
            <th scope="row"><?php echo $mecanico['cpf']?></th>
        </tr>
    </tbody>
    <?php endforeach;?>
</table>


<?php
include('templates/footer.php');
?>
