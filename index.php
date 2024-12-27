<?php
require_once __DIR__ . '/vendor/autoload.php';
// Inclure votre autoloader pour charger les classes

use Controller\HomeController;

$controller = new HomeController();
$controller->index();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Élection des délégués</title>
    <link rel="stylesheet" href="public/style/app.css">
</head>
<body>
<nav class="navbar">
    <ul>
        <li><a href="/index.php">Accueil</a></li>
        <li><a href="/View/firstRound.php">1er Round</a></li>
        <li><a href="/View/secondround.php">2ème Round</a></li>
        <li><a href="/View/results.php">Résultats</a></li>
    </ul>
</nav>

    <h1>Bienvenue à l'élection des délégués</h1>
    <p>Choisissez un groupe pour commencer :</p>

    <ul>
        <?php if (!empty($groups)): ?>
            <?php foreach ($groups as $group): ?>
                <li>
                    Groupe: <?= htmlspecialchars($group['name']) ?>
                    <a href="/View/first-round/<?= $group['id'] ?>">Voter</a>

                    <a href="/results/<?= $group['id'] ?>">Voir les résultats</a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun groupe disponible pour l'instant.</p>
        <?php endif; ?>
    </ul>
</body>
</html>

