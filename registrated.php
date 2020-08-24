<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Учётная запись зарегестрирована!</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php require_once 'components/header.php'; ?>
    
    <main class="mainly">
        <div class="container">
            <div class="registrationDone">
                <div class="alerting">
                    <h2>Ваша запись была успешно зарегестрирована!</h2>
                    <?php if(isset($_SESSION['emailRegistrated'])): ?>
                    <p>На вашу почту <?php echo $_SESSION['emailRegistrated']; ?> было отправленно электронное письмо с инструкциями</p>
                    <p>Для входа нажмите на кнопку входа.</p>
                    <?php unset($_SESSION['emailRegistrated']); ?>
                    <?php endif; ?>
                </div>
            </div>
                <div class="boring-div">
                    <p class="boring-text">Antihype!</p>
                    <p>Твой IP = <?php $ip = $_SERVER['REMOTE_ADDR']; echo $ip ?></p>
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