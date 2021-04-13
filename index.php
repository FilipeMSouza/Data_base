<?php
include 'Templates/header.php'
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="Style/style.css"
    </head>
    <body>
        <div class = "container">
            <div>
                <img class="Img" src="Assets/gb.png" target="blank">
            </div>

            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" ></label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="User Name" style="color: #000000; border-radius: 5px 5px 0px 0px;">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" style="margin-top: 8px;"></label>
                    <input type="password" class="form-control" placeholder="Password" style="color: #000000; border-radius: 0px 0px 5px 5px;">
                </div>
            </form>

            <div class="bttn">
                <button type="submit" class="btn btn-primary btn-lg" style="display: flex;margin-right: 15px; background-color: #264039; color: #ffffff; font-weight: bold">Register</button>
                <button type="submit" class="btn btn-secondary btn-lg" style="display: flex;margin-right: 15px; background-color: #ffffff; color: #000000; font-weight: bold">Login</button>
            </div>

        </div>

    </body>
</html>

