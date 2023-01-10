<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/regandauth/authtorization.css">
    <title>Авторизация Seviche Catering</title>
</head>
<body>
    <header>
        <?php include "header.php" ?>
    </header>
    <main>
        <div class="container">
            <div class="under-container">
                <h1>Авторизация</h1>
                <form action="feedbackauth.php" method="POST">
                    <input type="text" name="login" placeholder="Ваш логин" required>
                    <input type="password" name="password" placeholder="Ваш пароль" required>
                    <input type="submit" name="btnsubmit" value="Авторизоваться" class="btn-submit">
                    <a class="btn-reg" href="registration.php">Регистрация</a>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <?php include "footer.php" ?>
    </footer>
</body>
</html>