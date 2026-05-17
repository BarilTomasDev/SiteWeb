<?php require_once 'header.php'; ?>
<?php
if (role() != 'admin') {
    echo '<div class="alert alert-danger">Accès refusé : réservé à l’administrateur.</div>';
    require_once 'footer.php';
    exit;
}
?>
<h1 class="h3">Administration des annonces</h1>
<table class="table table-striped table-bordered align-middle">
    <thead class="table-primary">
        <tr>
            <th>Titre</th>
            <th>Ville</th>
            <th>Prix</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($annonces as $a) { ?>
            <tr>
                <td><?= htmlspecialchars($a['titre']) ?></td>
                <td><?= htmlspecialchars($a['ville']) ?></td>
                <td><?= format_prix($a['prix']) ?></td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Modifier</a>
                    <a href="#" class="btn btn-sm btn-danger">Supprimer</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<div class="alert alert-info">Les boutons sont une maquette. Avec une base de données, ils lanceraient UPDATE et DELETE.</div>
<?php require_once 'footer.php'; ?>
