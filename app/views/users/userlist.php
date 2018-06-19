Привет, <?= $data['username'] ?>

Список поьзователей

<?php foreach ($data['users'] as $user) : ?>
    <li><?=$user ?></li>
<?php endforeach; ?>
