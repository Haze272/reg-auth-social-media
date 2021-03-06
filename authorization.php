<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    
    <?php require_once 'components/header.php'; ?>

    <main class="mainly">
        <div class="container">
            <div class="registration_form">
                <form action="scripts/auth.php" method="post">

                    <p class="boring-div">
                        <label class="form-label" for="simpleinput" id="form-login">Введите логин</label>
                    </p>
                    <p>
                        <input type="text" class="form-control" name="login" required>
                    </p>

                    <p class="boring-div">
                        <label class="form-label" for="simpleinput">Введите пароль</label>
                    </p>
                    <p>
                        <input type="password" class="form-control" name="password" required>
                    </p>
                    
                    <button class="btn btn-success mt-3" type="submit">Войти</button>
                </form>
                <div class="boring-div">
                    <p class="boring-text">Antihype!</p>
                </div>
            </div>
        </div>
    </main>

    <?php require_once 'components/footer.html'; ?>

    <div class="boring-div">
        <p class="boring-text">Antihype!</p>
    </div>
</body>
</html>