<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Голосование</title>
</head>
<body>
    <h1>Ваш любимый язык программирования</h1>
    <form action="vote_process.php" method="POST">
        <label>
            <input type="radio" name="vote" value="C++" required> C++
        </label><br>
        <label>
            <input type="radio" name="vote" value="PHP"> PHP
        </label><br>
        <label>
            <input type="radio" name="vote" value="Java"> Java
        </label><br>
        <button type="submit">Голосовать!</button>
    </form>
</body>
</html>
