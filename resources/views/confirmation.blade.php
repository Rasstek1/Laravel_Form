<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <!-- Ajoutez les liens vers les fichiers CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Confirmation</h1>
            <p class="card-text">Nom : {{ $nom }}</p>
            <p class="card-text">Prénom : {{ $prenom }}</p>
            <p class="card-text">Adresse e-mail : {{ $email }}</p>
            <p class="card-text">Téléphone : {{ $telephone }}</p>
            <p class="card-text">Message : {{ $message }}</p>
        </div>
    </div>
</div>

<!-- Ajoutez les liens vers les fichiers JavaScript Bootstrap et jQuery (optionnel) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
