<?php
include '../.././Templates/header.php';
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/List_Jog.css">

</head>

<body>

<div class="Cont-1">
    <header class="Nome_do_Time">
        <a href="./index.php">Green Bay Packers</a>
    </header>
    <button class="Btn_LgO" onclick="location.href='../../index.php'">Sair</button>
</div>



<div class="card-body">
    <div class="filtros">
        <div class="filtro1">
            <div class="input-group flex-nowrap">
                <input type="text" class="form-control" placeholder="Camiseta" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
        </div>

        <div class="filtro2">
            <div class="input-group flex-nowrap">
                <input type="text" class="form-control" placeholder="Posicao" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
        </div>

        <div class="filtro3">
            <div class="input-group flex-nowrap">
                <input type="text" class="form-control" placeholder="Equipe" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table tablesorter " id="">
            <thead class="text">
            <tr>
                <th scope="col">Cammiseta</th>
                <th scope="col">Nome</th>
                <th scope="col">Idade</th>
                <th scope="col">Pontuação</th>
                <th scope="col">Altura</th>
                <th scope="col">Peso</th>
                <th scope="col">Equipe</th>
                <th scope="col">Posição</th>
                <th class="text-center">Time anterior</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th id="#" scope="row">12</th>
                <td id="#">Aaron Rodgers</td>
                <td id="#">37</td>
                <td id="#">121.5</td>
                <td id="#">1,88m</td>
                <td id="#">102Kg</td>
                <td id="#">Ofenssive</td>
                <td id="#">Quarterback</td>
                <td id="#" class="text-center"> California Golden Bears (Faculdade)</td>
                <td> <button class="btn btn-primary btn-sm">Editar</button></td>
                <td> <button class="btn btn-primary btn-sm">Delete</button></td>
            </tr>
            <tr>
                <th id="#" scope="row">12</th>
                <td id="#">Aaron Rodgers</td>
                <td id="#">37</td>
                <td id="#">121.5</td>
                <td id="#">1,88m</td>
                <td id="#">102Kg</td>
                <td id="#">Ofenssive</td>
                <td id="#">Quarterback</td>
                <td id="#" class="text-center"> California Golden Bears (Faculdade)</td>
                <td> <button class="btn btn-primary btn-sm">Editar</button></td>
                <td> <button class="btn btn-primary btn-sm">Delete</button></td>

            </tr>
            <tr>
                <th id="#" scope="row">12</th>
                <td id="#">Aaron Rodgers</td>
                <td id="#">37</td>
                <td id="#">121.5</td>
                <td id="#">1,88m</td>
                <td id="#">102Kg</td>
                <td id="#">Ofenssive</td>
                <td id="#">Quarterback</td>
                <td id="#" class="text-center"> California Golden Bears (Faculdade)</td>
                <td> <button class="btn btn-primary btn-sm">Editar</button></td>
                <td> <button class="btn btn-primary btn-sm">Delete</button></td>

            </tr>
            <tr>
                <th id="#" scope="row">12</th>
                <td id="#">Aaron Rodgers</td>
                <td id="#">37</td>
                <td id="#">121.5</td>
                <td id="#">1,88m</td>
                <td id="#">102Kg</td>
                <td id="#">Ofenssive</td>
                <td id="#">Quarterback</td>
                <td id="#" class="text-center"> California Golden Bears (Faculdade)</td>
                <td> <button class="btn btn-primary btn-sm">Editar</button></td>
                <td> <button class="btn btn-primary btn-sm">Delete</button></td>

            </tr>
            <tr>
                <th id="#" scope="row">12</th>
                <td id="#">Aaron Rodgers</td>
                <td id="#">37</td>
                <td id="#">121.5</td>
                <td id="#">1,88m</td>
                <td id="#">102Kg</td>
                <td id="#">Ofenssive</td>
                <td id="#">Quarterback</td>
                <td id="#" class="text-center"> California Golden Bears (Faculdade)</td>
                <td> <button class="btn btn-primary btn-sm">Editar</button></td>
                <td> <button class="btn btn-primary btn-sm">Delete</button></td>

            </tr>
            </tbody>
        </table>
    </div>
</div>

</body>

</html>