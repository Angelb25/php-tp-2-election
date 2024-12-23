<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier tour - Élection des délégués</title>
</head>
<body>
    <h1>Premier tour - Élection des délégués</h1>

    <?php if (!empty($_GET['success'])): ?>
        <p style="color: green;">Vote enregistré avec succès !</p>
    <?php endif; ?>

    <form method="POST">
        <ul>
            <?php if (!empty($candidates)): ?>
                <?php foreach ($candidates as $candidate): ?>
                    <li>
                        <label>
                            <input type="radio" name="candidate_id" value="<?= htmlspecialchars($candidate['id']) ?>">
                            <?= htmlspecialchars($candidate['name']) ?>
                        </label>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun candidat disponible pour ce groupe.</p>
            <?php endif; ?>
        </ul>


        <button type="submit">Voter</button>
    </form>
</body>
</html>