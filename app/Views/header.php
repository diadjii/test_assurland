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
    <title>Assurland Gestion des Clients</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">

    <a class="navbar-brand">Plateforme de Gestion des Clients</a>
    <div class="collapse navbar-collapse">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="navbar-item">
            <a class="nav-link item" href="/gestion_utilisateurs">Gestion Utilisateurs</a>
        </li>
        <li class="navbar-item">
            <a class="nav-link" href="/gestion_prospects">Gestion des Prospects</a>
        </li>
    </ul>
    </div>

    <a class="btn btn-dark my-2 my-sm-0" href="/logout">Se Déconnecter</a>
</nav>
    <div class="container">
        <?= $this->renderSection('content') ?>

    </div>
    <?= $this->renderSection('script') ?>
</body>
</html>