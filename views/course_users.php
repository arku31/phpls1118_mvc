<h1>
    Course User List
</h1>
<ul>
    <?php foreach ($users as $user) : ?>
    <?php if ($user !== 'USER3') : ?>
        <li><?=$user?></li>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>

<br>
<h3>
    <?=$moredata?>
</h3>