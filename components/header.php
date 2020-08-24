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
        <?php if(isset($_SESSION['user'])): ?>
        <div class="RegAuth">
            <a href="#" class="hrefRegAuth"><?php echo $_SESSION['user']['login']; ?></a>
        </div>
        <div class="RegAuth">
            <a href="#" class="hrefRegAuth">
                <img src="img/logout.png" alt="logout" class="logout">
            </a>
        </div>
        <?php else: ?>
        <div class="RegAuth">
            <a href="registration.php" class="hrefRegAuth">Sign in</a>
        </div>
        <div class="RegAuth">
            <a href="authorization.php" class="hrefRegAuth">Log in</a>
        </div>
        <?php endif; ?>
    </div>
</nav>
</header>
