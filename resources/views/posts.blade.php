<!doctype html>

<title>MY BLOG</title>
<link rel="stylesheet" href="/app.css">

<body>
    <h1 class="head1";>MY PERSONAL BLOG</h1>
    <?php foreach ($posts as $post) : ?>
        <article>
            <h1>
                <a href="/posts/<?= $post->slug; ?>">
                <?= $post->title; ?>
                </a>
            </h1>

            <div style="line-height: 1.7;">
                <?= $post->excerpt; ?>
            </div>
        </article>
    <?php endforeach; ?>
</body>
<footer>
    <div class="footer">
        <p>&copy 2024 Blog-Post</p>
    </div>
</footer>
