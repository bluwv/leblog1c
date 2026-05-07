<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <main>
        <h1>Le Blog</h1>
        <p>Don’t have an account yet? <a href="">Sign up</a></p>

        <form method="POST" action="" novalidate autocomplete="off">

            <label for="email">email address</label>
            <input id="email" type="email" name="email" placeholder="name@gmail.com" autocomplete="username" required>

            <label for="password">password</label>
            <input id="password" type="password" name="password" placeholder="******" autocomplete="current-password" required>

            <input id="rememberme" type="checkbox">
            <label for="rememberme">Se souvenir de moi</label>

            <button type="submit">Login</button>

            <a href="">I lost my password</a>
        </form>

        <a href="">Revenir au blog</a>
    </main>

</body>
</html>
