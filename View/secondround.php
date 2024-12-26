<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Tour - Élection des délégués</title>
</head>
<body>
    <h1>Vote - Second Tour</h1>
    <?php if (!empty($candidats)): ?>
        <form action="/vote/submit.php" method="POST">
            <input type="hidden" name="group_id" value="<?= htmlspecialchars($groupId) ?>">
            <ul>
                <?php foreach ($candidats as $candidat): ?>
                    <li>
                        <label>
                            <input type="radio" name="candidate_id" value="<?= htmlspecialchars($candidat['id']) ?>" required>
                            <?= htmlspecialchars($candidat['name']) ?>
                        </label>
                    </li>
                <?php endforeach; ?>
            </ul>
            <button type="submit">Voter</button>
        </form>
    <?php else: ?>
        <p>Aucun candidat disponible pour ce groupe.</p>
    <?php endif; ?>
</body>
</html>
