<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Élection des délégués</title>
    <link rel="stylesheet" href="/css/style.css"> <!-- Chemin vers votre CSS -->
</head>
<body>
    <h1>Bienvenue à l'élection des délégués</h1>
    <p>Choisissez un groupe pour commencer :</p>

    <ul>
        <?php if (!empty($groups)): ?>
            <?php foreach ($groups as $group): ?>
                <li>
                    Groupe: <?= htmlspecialchars($group['name']) ?>
                    <a href="/vote/first-round/<?= $group['id'] ?>">Voter</a>
                    <a href="/results/<?= $group['id'] ?>">Voir les résultats</a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun groupe disponible pour l'instant.</p>
        <?php endif; ?>
    </ul>
</body>
</html>
