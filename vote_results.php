<?php
$resultsFile = 'results.txt';

$results = [];
if (file_exists($resultsFile)) {
    $results = json_decode(file_get_contents($resultsFile), true);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результаты голосования</title>
</head>
<body>
    <h1>Результаты голосования</h1>
    <?php if (!empty($results)): ?>
        <ul>
            <?php foreach ($results as $option => $count): ?>
                <li><?= htmlspecialchars($option) ?>: <?= $count ?> голосов</li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Голосов пока нет.</p>
    <?php endif; ?>
    <a href="index.php">Вернуться к голосованию</a>
</body>
</html>
