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
        <div>
            <img class="Img" src="Assets/logo.png" target="blank" alt="https://www.panthers.com/">
        </div>
        <div class = "container">
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
            </form>
            <div class="bttn">
                <button type="submit" class="btn btn-primary btn-lg" style="background-color: #0B8AD9; color: white">Register</button>
                <button type="submit" class="btn btn-secondary btn-lg" style="background-color: #012840; color: white">Login</button>
            </div>
        </div>

    </body>
</html>

<?php
include 'Templates/footer.php'
?>