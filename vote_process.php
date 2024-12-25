<?php
$resultsFile = 'results.txt';

if (isset($_POST['vote'])) {
    $vote = $_POST['vote'];

    $results = [];
    if (file_exists($resultsFile)) {
        $results = json_decode(file_get_contents($resultsFile), true);
    }

    if (isset($results[$vote])) {
        $results[$vote]++;
    } else {
        $results[$vote] = 1;
    }

    file_put_contents($resultsFile, json_encode($results));

    header('Location: vote_results.php');
    exit();
} else {
    echo "Ошибка: Не выбран ни один вариант.";
}
