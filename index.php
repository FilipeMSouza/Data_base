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
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/IND_Style.css">
</head>
<body>
    <div class="card-body">
    <div class="table-responsive">
        <table class="table tablesorter">
            <thead class = "text">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th class="text-center">Funções</th>

            </tr>
            </thead>

            <tbody>
            <tr>
                <th scope="row">aaaaaaaaaa</th>
                <th>39855209842</th>
                <th>19 991223123</th>
                <td class="text-center">
                    <button type="button" class="btn btn-primary btn-sm">Editar</button>
                    <button type="button" class="btn btn-danger btn-sm">Remover</button>
                </td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table tablesorter">
                <thead class = "text">
                    <tr>
                    <th scope="col">Mecanico</th>
                    <th scope="col">Telefone</th>
                    <th class="text-center">CPF do Mecanico</th>
                    <th class="text-center">Funções</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <th scope="row">aaaaaaaaaa</th>
                        <th>39855209842</th>
                        <th>19 991223123</th>
                        <td class="text-center">
                            <button type="button" class="btn btn-primary btn-sm">Editar</button>
                            <button type="button" class="btn btn-danger btn-sm">Remover</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<?php
include('./templates/footer.php');
?>
