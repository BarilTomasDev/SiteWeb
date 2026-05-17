<?php require_once 'header.php'; ?>
<?php
if (!est_connecte()) {
    header('Location: login.php');
    exit;
}

$id = (int) ($_GET['id'] ?? 0);
$annonce = null;
foreach ($annonces as $a) {
    if ($a['id'] == $id) {
        $annonce = $a;
    }
}

if (!$annonce) {
    echo '<div class="alert alert-danger">Annonce introuvable.</div>';
    require_once 'footer.php';
    exit;
}

$message_envoye = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // En vrai projet, on utiliserait mail($annonce['vendeur'], ...)
    $message_envoye = true;
}
?>

<h1 class="h3">Contacter le vendeur</h1>
<p>Annonce : <strong><?= htmlspecialchars($annonce['titre']) ?></strong></p>
<p>Email vendeur : <?= htmlspecialchars($annonce['vendeur']) ?></p>

<?php if ($message_envoye) { ?>
    <div class="alert alert-success">Message envoyé au vendeur (simulation).</div>
<?php } ?>

<form method="post" class="card card-body">
    <div class="mb-3">
        <label class="form-label">Votre email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Message</label>
        <textarea name="message" class="form-control" rows="5" required></textarea>
    </div>
    <button class="btn btn-primary">Envoyer</button>
</form>

<?php require_once 'footer.php'; ?>
