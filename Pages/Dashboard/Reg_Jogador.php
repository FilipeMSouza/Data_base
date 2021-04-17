<?php
include '../../Templates/header.php'
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/Cads_jogador.css">


</head>

<body>

    <div class="Cont-1">
        <header class ="Nome_do_Time">
            <a href="./index.php">Green Bay Packers</a>
        </header>
        <button class="Btn_LgO" onclick="location.href='../../index.php'">Sair</button>
    </div>

    <!--Barra lateal contendo o Menu-->
    <div class="Menu">
        <div class = "Lista-box">
            <ul>
                <li class="Dash">
                    <a href="./index.php">Painel de Controle</a>
                </li>
            </ul>
        </div>

        <div class = "Lista-box">
            <ul>
                <li class="Jogadores">
                    <a href="./Lista_Jogadores.php">Lista de Jogadores</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">

        <p class="Regs"> Registre - se </p>

        <div class="row">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Primeiro Nome"
                       style="box-shadow: 2px 2px #888888;">
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Ultimo Nome"
                       style="box-shadow: 2px 2px #888888;">
            </div>
        </div>

        <form action="/action_page.php">

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Idade" id="equipe">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Altua" id="equipe">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="peso" id="equipe">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Equipe" id="equipe">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Posição" id="posicao">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Time Anterior" id="Time_anterior">
            </div>

            <div class="bttn">
                <button type="submit" class="btn btn-primary btn-lg" >Enviar</button>
            </div>
        </form>
    </div>

</body>
</html>
