<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/regandauth/reg.css">
    <title>Регистрация Seviche Catering</title>
</head>
<body>
    <header>
        <?php include "header.php" ?>
    </header>
    <main>
        <div class="container">
            <div class="under-container">
                <h1>Регистрация</h1>
                <form action="feedbackreg.php" method="POST">
                    <input type="text" name="name" placeholder="Ваше имя">
                    <input type="text" name="login" placeholder="Ваш логин" required>
                    <input type="password" name="password" placeholder="Ваш пароль" required>
                    <input type="submit" name="btnsubmit" class="btn-submit">
                </form>
            </div>
        </div>
    </main>
    <footer>
        <?php include "footer.php" ?>
    </footer>
</body>
</html>