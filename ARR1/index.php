<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD::Login</title>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--CSS-->
    <link rel="stylesheet" href="./style.css">
</head>
<body class="text-center">
    
    <main class="form-sigin w100 m-auto login">
        <div class="form">
            <img src="user-interface.png" alt="" class="mb-4" id="brand">
            <h1 class="h3 mb-3">Acesse o Painel</h1>
            <form action="login.php" method="post" class="p-4">
                <div class="form-floating mb-3">
                    <input type="email" name="email" id="floatingInput" class="form-control" placeholder="E-mail">
                    <label for="floatingInput">E-mail</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" id="floatingpassword" class="form-control" placeholder="password">
                    <label for="floatingPassword">Senha</label>
                </div>
                <div class="checkbox md-3">
                    <input type="checkbox" name="" id=""> Lembrar-me
                </div>
                <input type="submit" value="Acessar" class="w-100 btn btn-danger">
            </form>
        </div>
    </main>

<!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>