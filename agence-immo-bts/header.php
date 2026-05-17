<?php require_once 'config.php'; ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agence Immo BTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Agence Immo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                <?php if (role() == 'vendeur' || role() == 'admin') { ?>
                    <li class="nav-item"><a class="nav-link" href="ajouter.php">Ajouter annonce</a></li>
                <?php } ?>
                <?php if (role() == 'admin') { ?>
                    <li class="nav-item"><a class="nav-link" href="admin.php">Administration</a></li>
                <?php } ?>
                <?php if (est_connecte()) { ?>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Déconnexion</a></li>
                <?php } else { ?>
                    <li class="nav-item"><a class="nav-link" href="login.php">Connexion / Inscription</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<main class="container my-4">
