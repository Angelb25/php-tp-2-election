<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats - Élection des délégués</title>
</head>
<body>
<h1>Résultats</h1>
<?php if (!empty($results)): ?>
    <ul>
        <?php foreach ($results as $result): ?>
            <li>
                <?= htmlspecialchars($result['candidate_name']) ?> : <?= htmlspecialchars($result['votes']) ?> votes
            </li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>Aucun résultat disponible pour ce groupe.</p>
<?php endif; ?>
<a href="/">Retour à l'accueil</a>
</body>
</html>
