<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        header {
            background-color: #ddd;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>
            <?= 'Hello, ' . htmlspecialchars($_GET['name']); ?>
        </h1>
    </header>
</body>
</html>