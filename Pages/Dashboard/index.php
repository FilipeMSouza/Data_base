<?php
include '../../Templates/header.php'
?>


<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="css/Graficos.css">

    </head>

    <body>
        <div class="Cont-1">
            <header class ="Nome_do_Time">
                <a href="#">Green Bay Packers</a>
            </header>
            <button class="Btn_LgO" onclick="location.href='../../index.php'">Sair</button>
        </div>
        <!--Barra lateal contendo o Menu-->
        <div class="Menu">
            <div class = "Lista-box">
                <ul>
                    <li class="Dash">
                        <a href="#">Painel de Controle</a>
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

            <div class = "Lista-box">
                <ul>
                    <li class="Novo_Jogador">
                        <a href="#">Cadastrar Jogador</a>
                    </li>
                </ul>
            </div>

            <div class = "Lista-box">
                <ul>
                    <li class="Perfil">
                        <a href="#">Perfil</a>
                    </li>
                </ul>
            </div>

        </div>

        <!--Gráficos A favor-->
        <div class="Cont-2">
            <div class="Pontos_feitos">
                <h2>Pontos feitos</h2>
                    <div class="P_Quart">
                        <h5 class="Chart1">7</h5>
                        <h5 class="txt1">1Quarto</h5>
                    </div>
                    <div class="S_Quart">
                        <h5 class="Chart2">14</h5>
                        <h5 class="txt2">2Quarto</h5>
                    </div>
                    <div class="T_Quart">
                        <h5 class="Chart3">10</h5>
                        <h5 class="txt3">3Quarto</h5>
                    </div>
                    <div class="Q_Quart">
                        <h5 class="Chart4">3</h5>
                        <h5 class="txt4">4Quarto</h5>
                    </div>
            </div>

            <div class="Jardas_Ganhas">
                <h2>Jardas Corridas</h2>
                <div class="P_Quart">
                    <h5 class="Chart1">80</h5>
                    <h5 class="txt1">1Quarto</h5>
                </div>
                <div class="S_Quart">
                    <h5 class="Chart2">120</h5>
                    <h5 class="txt2">2Quarto</h5>
                </div>
                <div class="T_Quart">
                    <h5 class="Chart3">50</h5>
                    <h5 class="txt3">3Quarto</h5>
                </div>
                <div class="Q_Quart">
                    <h5 class="Chart4">40</h5>
                    <h5 class="txt4">4Quarto</h5>
                </div>

            </div>

            <div class="Sacks_forçados">
                <h2>Sacks Forçadoss</h2>
                <div class="P_Quart">
                    <h5 class="Chart1">6</h5>
                    <h5 class="txt1">1Quarto</h5>
                </div>
                <div class="S_Quart">
                    <h5 class="Chart2">14</h5>
                    <h5 class="txt2">2Quarto</h5>
                </div>
                <div class="T_Quart">
                    <h5 class="Chart3">10</h5>
                    <h5 class="txt3">3Quarto</h5>
                </div>
                <div class="Q_Quart">
                    <h5 class="Chart4">3</h5>
                    <h5 class="txt4">4Quarto</h5>
                </div>
            </div>

            <div class="Turn_Overs">
                <h2>Turn Overs</h2>
                <div class="P_Quart">
                    <h5 class="Chart1">2</h5>
                    <h5 class="txt1">1Quarto</h5>
                </div>
                <div class="S_Quart">
                    <h5 class="Chart2">4</h5>
                    <h5 class="txt2">2Quarto</h5>
                </div>
                <div class="T_Quart">
                    <h5 class="Chart3">3</h5>
                    <h5 class="txt3">3Quarto</h5>
                </div>
                <div class="Q_Quart">
                    <h5 class="Chart4">1</h5>
                    <h5 class="txt4">4Quarto</h5>
                </div>
            </div>

            <!--Agenda de Jogos-->
            <div class="Ag_jogos">
                <h2>Próximos jogos</h2>
                <div class="schedule">
                    <p> Time </p>
                    <p> Cidade </p>
                    <p> Turno </p>
                    <p> Data </p>
                </div>
            </div>
        </div>
    </body>
</html>