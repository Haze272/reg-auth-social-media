<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your account</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <?php require_once 'components/header.php'; ?>
    
    <main class="mainly">
        <div class="container">
            <?php if(isset($_SESSION['user'])): ?>
            <div class="profileBox">
                <div class="avatarContainer">
                    <div class="avatarImage">
                        <img src="avatars/f5d7b6d007ae1453586a90f2ca0f05e4.jpg" alt="avatar">
                        <p>govmo</p>
                    </div>
                </div>
                <div class="profileData">
                    <div class="userLogin">
                        <p>Login:</p>
                        <p><?php echo $_SESSION['user']['login']; ?></p>
                    </div>
                    <div class="userEmail">
                        <p>Email</p>
                        <p><?php echo $_SESSION['user']['email']; ?></p>
                    </div>
                    <div class="userRole">
                        <p>Role</p>
                        <?php $_SESSION['user']['role'] ?>
                        <p><?php echo $_SESSION['user'][''] ?></p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </main>

    <?php require_once 'components/footer.html'; ?>

</body>
</html>