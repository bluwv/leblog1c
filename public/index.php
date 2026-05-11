<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dist/css/style.css">
</head>

<body data-page="home">

    <section class="hero">
        <h1 class="title">Le Blog</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In aut accusamus odio neque delectus ex, eaque consectetur ratione, iusto itaque voluptate nam. At quo aperiam totam illum, accusamus quia beatae!</p>
    </section>

    <section class="posts--lastest">
        <h2 class="title">Latest blog posts</h2>

        <div>
            <?php include 'inc/card-article.php'; ?>

            <?php
                for ( $i = 0; $i < 3; $i++ ) {
                    include 'inc/card-article.php';
                }
            ?>
        <div>
    </section>

    <section class="posts--all">
        <h2 class="title">All blog posts</h2>

        <ul class="filters">
            <li class="active">
                <a href="">all categories</a>
            </li>
            <li>
                <a href="">Categorie</a>
            </li>
            <li>
                <a href="">Categorie</a>
            </li>
            <li>
                <a href="">Categorie</a>
            </li>
            <li>
                <a href="">Categorie</a>
            </li>
        </ul>

        <div>
            <?php
                for ( $i = 0; $i < 5; $i++ ) {
                    include 'inc/card-article.php';
                }
            ?>
        </div>
    </section>

</body>
</html>
