<!doctype html>

<title>MY BLOG</title>
<link rel="stylesheet" href="/app.css">

<body>
    <h1 class="head1";>MY PERSONAL BLOG</h1>
    <article>
        <h1><?= $post->title; ?></h1>

        <div>
            <?= $post->body; ?>
        </div>
    </article>

    <a href="/">
        Go Back
    </a>
</body>
