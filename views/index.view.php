<?php require('partials/head.php'); ?>

    <h1>Home</h1>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user->name ?></li>
        <? endforeach; ?>
    </ul>

    <form method="post" action="/names">
        <input type="text" name="name">
        <button>Send</button>
    </form>

<?php require('partials/footer.php'); ?>