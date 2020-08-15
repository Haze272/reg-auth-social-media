<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg/auth</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="headerly">
        <nav class="toolbar">
            <div class="headerLogo">
                <a href="/">
                    <img src="img/logo2.png" alt="альтернативный текст">
                </a>
            </div>
            <div class="espacio">
            </div>
            <div class="headerAuth">
                <div class="RegAuth">
                    <a href="registration.php" class="hrefRegAuth">Sign in</a>
                </div>
                <div class="RegAuth">
                    <a href="authorization.php" class="hrefRegAuth">Log in</a>
                </div>
            </div>
        </nav>
    </header>
    <main class="mainly">
        <div class="container">
            <div class="registration_form">
                <form action="reg.php" method="post">
                    
                    <p>
                        <label class="form-label" for="simpleinput">Введите логин</label>
                    </p>
                    <p>
                        <input type="text" class="form-control" name="login">
                    </p>

                    <p>
                        <label class="form-label" for="simpleinput">Введите электронную почту</label>
                    </p>
                    <p>
                        <input type="text" class="form-control" name="email">
                    </p>

                    <p>
                        <label class="form-label" for="simpleinput">Введите пароль</label>
                    </p>
                    <p>
                        <input type="text" class="form-control" name="password">
                    </p>
                    
                    <button class="btn btn-success mt-3" type="submit">Создать учётную запись</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="footerly">
    
    </footer>
</body>
</html>