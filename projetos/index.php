<?php
/*include 'database/models.php';
include_once 'database/database.ini.php';

use ConexaoPHPPostgres\clienteModel as clienteModel;
use ConexaoPHPPostgres\mecanicoModel as mecanicoModel;
use ConexaoPHPPostgres\consertoModel as consertoModel;
use ConexaoPHPPostgres\veiculoModel as veiculoModel;

$clienteModel = new clienteModel($pdo);
$cliente = $clienteModel->all();
$mecanicoModel = new mecanicoModel($pdo);
$mecanico = $mecanicoModel->all();
$consertoModel = new consertoModel($pdo);
$conserto = $consertoModel->all();
$veiculoModel = new veiculoModel($pdo);
$veiculo = $veiculoModel->all();*/
?>
<?php
include('templates/header.php');
?>

<div class="card-body">
    <div class="table-responsive">
    <h3 style="text-align: center;">Clientes</h3>   
        <table class="table table-bordered">
            <thead class = "text">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th class="text-center">Funções</th>
            </tr>
            </thead>
            <?php foreach ($cliente as $cliente):?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $cliente['nomecliente']?></th>
                        <th scope="row"><?php echo $cliente['cpfcliente']?></th>
                        <th scope="row"><?php echo $cliente['telefone']?></th>
                        <td class="text-center">
                            <a class="btn btn-danger btn-sm" href="./pages/delete/cliente.php?id=<?php echo $cliente['cpfcliente']?>">Remover</button>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach;?>
        </table>
    </div>
</div>

<div class="card-body">
    <div class="table-responsive">
        <h3 style="text-align: center;">Mecanicos</h3>
        <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Nome</th>
            <th scope="col">Celular</th>
            <th scope="col">CPF</th>
            <th scope="col">Funcoes</th>
            </tr>
        </thead>
        <?php foreach ($mecanico as $mecanico):?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $mecanico['nome']?></th>
                <th scope="row"><?php echo $mecanico['celular']?></th>
                <th scope="row"><?php echo $mecanico['cpf']?></th>
                <td class="text-center">
                    <a class="btn btn-danger btn-sm" href="./pages/delete/mecanico.php?id=<?php echo $mecanico['cpf']?>">Remover</button>
                </td>
            </tr>
        </tbody>
        <?php endforeach;?>
        </table>
    </div>
</div>

<div class="card-body">
<div class="table-responsive">
<h3 style="text-align: center;">Veiculos</h3>
<table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">Modelo</th>
        <th scope="col">Ano</th>
        <th scope="col">Placa</th>
        <th scope="col">CPF do Cliente</th>
        <th scope="col">Marca</th>
        <th scope="col">Funcoes</th>
        </tr>
    </thead>
    <?php foreach ($veiculo as $veiculo):?>
    <tbody>
    <?php
        $date =  date_create($veiculo['ano']);
    ?>
        <tr>
            <th scope="row"><?php echo $veiculo['modelo']?></th>
            <th scope="row"><?php echo date_format($date, "Y")?></th>
            <th scope="row"><?php echo $veiculo['placa']?></th>
            <th scope="row"><?php echo $veiculo['cpfclienteveiculo']?></th>
            <th scope="row"><?php echo $veiculo['marca']?></th>
            <td class="text-center" style="margin-left: 10px; margin-right: 10px">
                <a class="btn btn-danger" href="./pages/delete/veiculo.php?id=<?php echo $veiculo['placa']?>">Remover</button>
                <a class="btn btn-primary"  href="./pages/update/veiculo.php?id=<?php echo $veiculo['placa']?>">Editar</button>
            </td>
            </td>
        </tr>
    </tbody>
    <?php endforeach;?>
</table>
</div>
</div>

<div class="card-body">
<div class="table-responsive">
<h3 style="text-align: center;">Consertos</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Mecanico</th>
            <th scope="col">Cliente</th>
            <th scope="col">Placa</th>
            <th scope="col">Valor</th>
            <th scope="col">Descrição</th>
            <th scope="col">Data de Revisao</th>
            <th scope="col">Funcoes</th>
        </tr>
    </thead>
    <<?php foreach ($conserto as $conserto):?>
    <tbody>
        <tr>
            <th scope="row"><?php echo $conserto['mecanico']?></th>
            <th scope="row"><?php echo $conserto['clientecpf']?></th>
            <th scope="row"><?php echo $conserto['placa']?></th>
            <th scope="row"><?php echo $conserto['valorrevisao']?></th>
            <th scope="row"><?php echo $conserto['descricao']?></th>
            <th scope="row"><?php echo $conserto['datarevisao']?></th>
            <td class="text-center" style="margin-left: 10px; margin-right: 10px">
                <a class="btn btn-danger" href="./pages/delete/conserto.php?id=<?php echo $conserto['placa']?>">Remover</a>
                <a class="btn btn-primary"  href="./pages/update/conserto.php?id=<?php echo $conserto['placa']?>">Editar</a>
            </td>
        </tr>        
    </tbody>
    <?php endforeach;?>
</table>
</div>
</div>

<?php
include('templates/footer.php');
?>
