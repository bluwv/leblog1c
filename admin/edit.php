<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header>
        <a href="">Le Blog <span>v1.0</span></a>

        <!-- Recherche -->

        <ul>
            <li>
                <a href="">Tableau de bord</a>
            </li>
            <li>
                <a href="">Articles</a>
            </li>
            <li>
                <a href="">Catégories</a>
            </li>
            <li>
                <a href="">Users</a>
            </li>
            <li>
                <a href="">Notifications</a>
            </li>
            <li>
                <a href="">Paramètres</a>
            </li>
        </ul>

        <p>Adrien</p>
        <button type="button">…</button>
    </header>

    <main>
        <section class="dashboard-title">
            <h1>Ajouter un article</h1>
            <a class="button" href="">Add new</a>
        </section>

        <form method="POST" action="" novalidate>
            <div>
                <label for="title">Titre</label>
                <input id="title" type="text" name="title" placeholder="Lorem ipsum" required>

                <label for="content">Contenu</label>
                <textarea id="content" name="content" placeholder="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia blanditiis modi rerum voluptate. Similique, dolorem nulla. Maxime minus sunt explicabo alias nostrum, maiores molestiae officia modi eos culpa. Sit, nam?" required></textarea>
            </div>

            <div>
                <label for="thumbnail">Thumbnail</label>
                <input id="thumbnail" type="file" name="thumbnail">

                <fieldset>
                    <legend for="">Catégories</legend>

                    <input id="categorie-1" type="radio" name="categories" value="Catégorie 1">
                    <label for="categorie-1">Catégorie 1</label>

                    <input id="categorie-2" type="radio" name="categories" value="Catégorie 2">
                    <label for="categorie-2">Catégorie 2</label>

                    <input id="categorie-3" type="radio" name="categories" value="Catégorie 3">
                    <label for="categorie-3">Catégorie 3</label>
                </fieldset>

                <label for="status">Statut</label>
                <select id="status" name="status">
                    <option value="draft" selected>Brouillon</option>
                    <option value="publish">Publié</option>
                </select>

                <label for="author">Auteur</label>
                <input id="author" type="text" name="author" value="Adrien">

            </div>

            <button type="submit">Publier</button>
        </form>

        </div>

        <div>
            <p>Crafter avec amour par les X75 1C</p>
        </div>
    </main>

</body>
</html>
