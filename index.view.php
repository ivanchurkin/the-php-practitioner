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
            <strong>Title:</strong> <?= $task['name'] ?>
        </li>
        <li>
            <strong>Due:</strong> <?= $task['due'] ?>
        </li>
        <li>
            <strong>Assigned to:</strong> <?= $task['assigned_to'] ?>
        </li>
        <li>
            <strong>Status:</strong> <?= $task['completed'] ? 'Complete' : 'Incomplete' ?>
        </li>
    </ul>
</body>
</html>