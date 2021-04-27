

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

.form-group{
    margin-top: 15px;
}

.btn{
    margin-top: 10px;
}
</style>

<div class="container">
    <div class="row py-5">
        <div class="col">
            <h4>Editar conserto</h4>
        </div>
        <div class="col"></div>
    </div>

    <form action="conserto.php?id=<?php echo $id ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <div class="form-group">
            <label for="mecanico">Mecanico:</label>
            <select class="form-control" id="mecanico" name="mecanico" value="<?php echo !empty($mecanico) ? $mecanico : ''; ?>">
            <?php foreach ($mecanico as $mecanico) : ?>
                    <tr>
                        <option value="<?php echo htmlspecialchars($mecanico['cpf']); ?>" <?php echo $mecanico['cpf'] == $conserto['mecanico'] ? "selected" : '' ?>><?php echo htmlspecialchars($mecanico['nome']), ' ', htmlspecialchars($mecanico['cpf']); ?></option>
                    </tr>
            <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="codigocliente">Cliente:</label>
            <select class="form-control" id="cpfcliente" name="cpfcliente" value="<?php echo !empty($cpfcliente) ? $cpfcliente : ''; ?>" required>
                <?php foreach ($cliente as $cliente) : ?>
                    <tr>
                        <option value="<?php echo htmlspecialchars($cliente['cpfcliente']); ?>" <?php echo $cliente['cpfcliente'] == $cliente ? "selected" : '' ?>><?php echo htmlspecialchars($cliente['nomecliente']), ' ', htmlspecialchars($cliente['telefone']); ?></option>
                    </tr>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="placa">Placa:</label>   
            <input class="form-control" value="<?php echo $conserto['placa'] ?>" type="text" name="placa" id="placa" required>
        </div>

        <div class="form-group">
            <label for="valorrevisao">Valor Revisão:</label>
            <input class="form-control" value="<?php echo $conserto['valorrevisao'] ?>" type="text" name="valorrevisao" id="valorrevisao" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input class="form-control" value="<?php echo $conserto['descricao']; ?>" type="text" name="descricao" id="descricao" required>
        </div>

        <div class="form-group">
            <label for="datarevisao">Data da Revisao:</label>
            <input class="form-control" type="date" value="<?php echo $conserto['datarevisao']?>" name="datarevisao" id="datarevisao" required>
        </div>

        <input type="hidden" name="id" value="<?php echo $id?>">
        <button type="submit" class="btn btn-primary btn-sm">Confirma a deleção</button>
    </form>


</div>
