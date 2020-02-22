<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tasks per day</h1>
    <ul>
        <li>
            <strong>Name:</strong> <?= $task['title'] ?>
        </li>
        <li>
            <strong>Due Date:</strong> <?= $task['due'] ?>
        </li>
        <li>
            <strong>Person Responsible:</strong> <?= $task['assigned_to'] ?>
        </li>
        <li>
            <strong>Status:</strong>

            <? if ($task['completed']) : ?>
                <span class="icon">&#9989;</span>
            <? else : ?>
                <span class="icon">&#10062;</span>
            <? endif; ?>
        </li>
    </ul>
</body>
</html>