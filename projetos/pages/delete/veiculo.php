<?php
include('../../templates/header.php');
?>
<?php
include '../../database/models.php';
include_once '../../database/database.ini.php';
use ConexaoPHPPostgres\veiculoModel as veiculoModel;


$veiculoModel = new veiculoModel($pdo);

$id = $_REQUEST['id'];
$veiculo = $veiculoModel->select_by_id($id);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    try {
        $veiculoModel->delete_by_id($id);
        header("Location: ../../index.php");
    } catch (PDOException $e) {
        $error = $e->getMessage();
    }
}
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

.btn{
    display: flex;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
}
</style>


<form action="veiculo.php?id=<?php echo $id?>" method="POST">

    <div class="text-center" style="font-size: 17px" >
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
        <label class="form-check-label" for="defaultCheck1">Deseja realmente apagar</label>
    </div>

    <input type="hidden" name="id" value="<?php echo $id?>">
    <button type="submit" class="btn btn-primary btn-lg">Confirma a deleção</button>
</form>

<?php
include('../../templates/footer.php');
?>
