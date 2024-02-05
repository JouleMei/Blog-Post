<!doctype html>

<title>MY BLOG</title>
<link rel="stylesheet" href="/app.css">

<body>
    <h1 class="head1";>MY PERSONAL BLOG</h1>
    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>
</body>
