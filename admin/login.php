<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/dist/css/style.css">
</head>

<body data-page="login">

    <main>
        <div class="container">
            <h1><a href="../public/index.php">Le Blog</a></h1>
            <p>Don’t have an account yet? <a href="">Sign up</a></p>

            <form method="POST" action="list.php" novalidate autocomplete="off">

                <div class="form-row">
                    <label for="email">email address</label>
                    <input id="email" type="email" name="email" placeholder="name@gmail.com" autocomplete="username" required>
                </div>

                <div class="form-row">
                    <label for="password">password</label>
                    <input id="password" type="password" name="password" placeholder="******" autocomplete="current-password" required>
                </div>

                <div class="form-row form-row--checkbox">
                    <input id="rememberme" type="checkbox">
                    <label for="rememberme">Se souvenir de moi</label>
                </div>

                <button class="button" type="submit">Login</button>

                <a href="">I lost my password</a>
            </form>
        </div>

        <a href="../public/index.php">Revenir au blog</a>
    </main>

</body>
</html>
