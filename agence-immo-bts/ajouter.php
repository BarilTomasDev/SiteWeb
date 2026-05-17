<?php require_once 'header.php'; ?>
<?php
if (role() != 'vendeur' && role() != 'admin') {
    echo '<div class="alert alert-danger">Accès refusé : seuls les vendeurs peuvent ajouter une annonce.</div>';
    require_once 'footer.php';
    exit;
}

$ajout = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ici on simule l'ajout. Avec une BDD, on ferait un INSERT.
    $ajout = true;
}
?>
<h1 class="h3">Ajouter une annonce</h1>
<?php if ($ajout) { ?>
    <div class="alert alert-success">Annonce ajoutée en simulation.</div>
<?php } ?>
<form method="post" class="card card-body">
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Type</label>
            <select name="type" class="form-select">
                <option>Appartement</option>
                <option>Maison</option>
                <option>Loft</option>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label">Prix</label>
            <input type="number" name="prix" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Ville</label>
            <input type="text" name="ville" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Nombre de pièces</label>
            <input type="number" name="pieces" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Date de mise en vente</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Images</label>
            <input type="file" name="images[]" class="form-control" multiple>
        </div>
        <div class="col-12">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="4" required></textarea>
        </div>
    </div>
    <button class="btn btn-primary mt-3">Ajouter</button>
</form>
<?php require_once 'footer.php'; ?>
