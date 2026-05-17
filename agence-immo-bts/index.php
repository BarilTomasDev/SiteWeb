<?php require_once 'header.php'; ?>

<div class="p-4 p-md-5 mb-4 bg-light rounded-3">
    <h1 class="display-6 fw-bold">Trouvez votre futur bien immobilier</h1>
    <p class="lead">Appartements, maisons et lofts disponibles à la vente.</p>
    <?php if (est_connecte()) { ?>
        <span class="badge text-bg-success">Connecté : <?= htmlspecialchars($_SESSION['user']) ?> (<?= role() ?>)</span>
    <?php } else { ?>
        <span class="badge text-bg-secondary">Visiteur non connecté</span>
    <?php } ?>
</div>

<form method="get" class="card card-body mb-4">
    <h2 class="h5 mb-3">Filtres de recherche</h2>
    <div class="row g-3">
        <div class="col-md-3">
            <label class="form-label">Ville</label>
            <input type="text" name="ville" class="form-control" value="<?= htmlspecialchars($_GET['ville'] ?? '') ?>" placeholder="Ex : Paris">
        </div>
        <div class="col-md-3">
            <label class="form-label">Prix minimum</label>
            <input type="number" name="prix_min" class="form-control" value="<?= htmlspecialchars($_GET['prix_min'] ?? '') ?>">
        </div>
        <div class="col-md-3">
            <label class="form-label">Prix maximum</label>
            <input type="number" name="prix_max" class="form-control" value="<?= htmlspecialchars($_GET['prix_max'] ?? '') ?>">
        </div>
        <div class="col-md-2">
            <label class="form-label">Pièces</label>
            <input type="number" name="pieces" class="form-control" value="<?= htmlspecialchars($_GET['pieces'] ?? '') ?>">
        </div>
        <div class="col-md-1 d-flex align-items-end">
            <button class="btn btn-primary w-100">OK</button>
        </div>
    </div>
</form>

<?php
$resultats = $annonces;

if (!empty($_GET['ville'])) {
    $ville = strtolower($_GET['ville']);
    $resultats = array_filter($resultats, function ($a) use ($ville) {
        return str_contains(strtolower($a['ville']), $ville);
    });
}

if (!empty($_GET['prix_min'])) {
    $min = (int) $_GET['prix_min'];
    $resultats = array_filter($resultats, fn($a) => $a['prix'] >= $min);
}

if (!empty($_GET['prix_max'])) {
    $max = (int) $_GET['prix_max'];
    $resultats = array_filter($resultats, fn($a) => $a['prix'] <= $max);
}

if (!empty($_GET['pieces'])) {
    $pieces = (int) $_GET['pieces'];
    $resultats = array_filter($resultats, fn($a) => $a['pieces'] == $pieces);
}

$resultats = array_values($resultats);
$par_page = 3;
$page = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
$total_pages = max(1, ceil(count($resultats) / $par_page));
$debut = ($page - 1) * $par_page;
$annonces_page = array_slice($resultats, $debut, $par_page);
?>

<div class="row g-4">
    <?php foreach ($annonces_page as $annonce) { ?>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="<?= $annonce['images'][0] ?>" class="card-img-top img-bien" alt="Image du bien" data-bs-toggle="modal" data-bs-target="#modal<?= $annonce['id'] ?>">
                <div class="card-body">
                    <span class="badge text-bg-info mb-2"><?= $annonce['type'] ?></span>
                    <h3 class="h5"><?= htmlspecialchars($annonce['titre']) ?></h3>
                    <p class="text-muted mb-1"><?= htmlspecialchars($annonce['ville']) ?> - <?= $annonce['pieces'] ?> pièce(s)</p>
                    <p class="fw-bold text-primary fs-5"><?= format_prix($annonce['prix']) ?></p>
                    <p><?= htmlspecialchars($annonce['description']) ?></p>
                    <p class="small text-muted">Mise en vente le <?= date('d/m/Y', strtotime($annonce['date'])) ?></p>
                    <?php if (est_connecte()) { ?>
                        <a href="contact.php?id=<?= $annonce['id'] ?>" class="btn btn-outline-primary w-100">Contacter le vendeur</a>
                    <?php } else { ?>
                        <a href="login.php" class="btn btn-outline-secondary w-100">Connectez-vous pour contacter</a>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal<?= $annonce['id'] ?>" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?= htmlspecialchars($annonce['titre']) ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div id="carousel<?= $annonce['id'] ?>" class="carousel slide">
                            <div class="carousel-inner">
                                <?php foreach ($annonce['images'] as $index => $image) { ?>
                                    <div class="carousel-item <?= $index == 0 ? 'active' : '' ?>">
                                        <img src="<?= $image ?>" class="d-block w-100 rounded image-zoom" alt="Photo du bien">
                                    </div>
                                <?php } ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel<?= $annonce['id'] ?>" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel<?= $annonce['id'] ?>" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<?php if (count($annonces_page) == 0) { ?>
    <div class="alert alert-warning">Aucune annonce trouvée avec ces filtres.</div>
<?php } ?>

<nav class="mt-4">
    <ul class="pagination justify-content-center">
        <?php for ($i = 1; $i <= $total_pages; $i++) { 
            $params = $_GET;
            $params['page'] = $i;
        ?>
            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
                <a class="page-link" href="?<?= http_build_query($params) ?>"><?= $i ?></a>
            </li>
        <?php } ?>
    </ul>
</nav>

<?php require_once 'footer.php'; ?>
