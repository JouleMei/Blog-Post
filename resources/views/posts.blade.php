<!doctype html>

<title>MY BLOG</title>
<link rel="stylesheet" href="/app.css">

<body>
    <h1 class="head1";>MY PERSONAL BLOG</h1>
    <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <?= $post->Title; ?>
            </h1>
        </article>
    <?php endforeach; ?>
</body>
