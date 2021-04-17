<?php
include "../.././Templates/header.php";
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Reg_style.css">
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-o shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Green Bay Packers</a>

    </header>

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
                <input type="email" class="form-control" placeholder="Enter email" id="email">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Insira a Senha" id="pwd">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirme a Senha" id="pwd">
            </div>

            <div class="container-fluid">
                <div class="row col-sm-4">
                    <input type="text" class="form-control" id="floatinginput" placeholder="Dia"
                    style="box-shadow: 2px 2px #888888;">
                </div>
                <div class="row col-sm-4">
                    <input type="text" class="form-control" id="floatinginput" placeholder="Mês"
                    style="box-shadow: 2px 2px #888888;">
                </div>
                <div class="row col-sm-4">
                    <input type="text" class="form-control" id="floatinginput" placeholder="Ano"
                    style="box-shadow: 2px 2px #888888;">
                </div>
            </div>
            <div class="bttn">
                <button type="submit" class="btn btn-primary btn-lg" >Enviar</button>
            </div>
        </form>
    </div>

</body>

</html>