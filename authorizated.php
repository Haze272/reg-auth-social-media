<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход выполнен успешно!</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php require_once 'components/header.html'; ?>

    <main class="mainly">
        <div class="container">
            <div class="registrationDone">
                <div class="alerting">
                    <h2>Вход был успешно выполнен!</h2>
                    <?php if(isset($_POST['login'])): ?>
                    <p>Вы вошли под логином <?php echo $_POST['login']; ?></p>
                    <p>Я пидорас</p>
                    <?php unset($_POST['login']); ?>
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