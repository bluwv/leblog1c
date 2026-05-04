<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <section>
        <h1>Le Blog</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In aut accusamus odio neque delectus ex, eaque consectetur ratione, iusto itaque voluptate nam. At quo aperiam totam illum, accusamus quia beatae!</p>
    </section>

    <section>
        <h2>Latest blog posts</h2>
        <?php include 'inc/card-article.php'; ?>

         <?php
            for ( $i = 0; $i < 3; $i++ ) {
                include 'inc/card-article.php';
            }
        ?>
    </section>

    <section>
        <h2>All blog posts</h2>

        <ul>
            <li>
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

        <?php
            for ( $i = 0; $i < 5; $i++ ) {
                include 'inc/card-article.php';
            }
        ?>
    </section>

</body>
</html>
