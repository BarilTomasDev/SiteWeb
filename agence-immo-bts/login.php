<?php require_once 'header.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['user'] = $_POST['nom'];
    $_SESSION['role'] = $_POST['role'];
    header('Location: index.php');
    exit;
}
?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="h4 mb-3">Connexion / Inscription</h1>
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Type de profil</label>
                        <select name="role" class="form-select">
                            <option value="inscrit">Inscrit</option>
                            <option value="vendeur">Vendeur</option>
                            <option value="admin">Administrateur</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">Entrer sur le site</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>
