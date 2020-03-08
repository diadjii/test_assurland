<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <title>Page de Connexion</title>
</head>
<body class="">
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Plateforme Gestion des Clients</a>
    </nav>
    <br>
    <div class="row justify-content-md-center">
        <div class="row">

        </div>
        <br>
        <div class="col-4">
            <h2 class="text-center">Se Connecter</h2>
            <form class="form-signin" method="post" action="/user/login">
                <div class="form-group">
                    <label for="exampleInputEmail1">Login</label>
                    <input type="text" class="form-control" name="login" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mot de Passe</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <button type="submit" class="btn btn-dark">Se Connecter</button>
            </form>
        </div>
    </div>

</body>
</html>